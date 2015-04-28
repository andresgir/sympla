var selectors = {
	// Panels
    idCreatingTicket: '#creatingTicket',
    idFinishedCreatingTicket: '#finishedCreatingTicket',

    // Grid
    idTicketTable: '#myTableData',
    classEditTicket: '.edit-ticket',
    classDeleteTicket: '.delete-ticket',
    classDeleteMe: '.delete-me',

    // General settings panel
    idTicketId: '#ticketId',
    idTicketType: '#ticketName',
    idPrice: '#price',
    idDivIsFree: '#isfree',
    idCheckboxIsFree: '#isFree',
    idQuantity: '#quantity',
    idSaveSettings: '#add',
    idIDontWantCreateMoreTickets: '#aIDontWantCreateMoreTickets',
    idSpanCreatingNewTicket: '#spanCreatingNewTicket',

    // Advanced settings panel
    //idAdvancedSettings: '#advanced-ticket-options',
    idShowAdvancedSettings: '#showoptions',
    idHideAdvancedSettings: '#hideoptions',
    idDescription: '#description',
    idSaleStartDate: '#saleStartDate',
    idSaleStartTime: '#saleStartTime',
    idSaleEndDate: '#saleEndDate',
    idSaleEndTime: '#saleEndTime',
    idMinQuantity: '#minQuantity',
    idMaxQuantity: '#maxQuantity',
    idOnlyForGuests: '#onlyForGuests',
    idDivPrivacySettings: '#onlyinvited',
    idInviteByEmail: '#inviteByEmail',
    idInviteByPersonalLink: '#inviteByPersonalLink',
    idAbsorbServiceFee: '#absorbServiceFee'
};

function TicketCreator(editTicketHandler, deleteTicketHandler) {
	window.editTicketHandler = editTicketHandler;
	window.deleteTicketHandler = deleteTicketHandler;
};

TicketCreator.prototype = {
	// Constructor
	constructor: TicketCreator,

	// Zero tickets so far
	tickets: [],

	// No index so far
	ticketIndex: -1,

	// Creates a Ticket object from the "Create / Edit ticket" form
	getTicketInfo: function() {
		var ticket = new Ticket({
			id: 					$(selectors.idTicketId).val(),
			ticketType: 			$(selectors.idTicketType).val(),
			price: 					parseFloat($(selectors.idPrice).val() || 0),
			quantity: 				$(selectors.idQuantity).val(),
			description: 			$(selectors.idDescription).val(),
			saleStartDate: 			$(selectors.idSaleStartDate).val(),
			saleStartTime: 			$(selectors.idSaleStartTime).val(),
			saleEndDate: 			$(selectors.idSaleEndDate).val(),
			saleEndTime: 			$(selectors.idSaleEndTime).val(),
			minQuantity: 			$(selectors.idMinQuantity).val(),
			maxQuantity: 			$(selectors.idMaxQuantity).val(),
			onlyForGuests: 			$(selectors.idOnlyForGuests).is(':checked'),
			inviteByEmail: 			$(selectors.idInviteByEmail).is(':selected'),
			inviteByPersonalLink: 	$(selectors.idInviteByPersonalLink).is(':selected'),
			absorbServiceFee: 		$(selectors.idAbsorbServiceFee).is(':checked')
		});

		return ticket;
	},

	// Fill "Create / Edit ticket" form with the provided Ticket information
	setTicketInfo: function(ticket) {
		var self = this;
		$(selectors.idTicketId).val(ticket.id);
		$(selectors.idTicketType).val(ticket.ticketType);
		$(selectors.idPrice).val(ticket.price);
		$(selectors.idQuantity).val(ticket.quantity);
		$(selectors.idDescription).val(ticket.description);
		$(selectors.idSaleStartDate).val(ticket.saleStartDate);
		$(selectors.idSaleStartTime).val(ticket.saleStartTime);
		$(selectors.idSaleEndDate).val(ticket.saleEndDate);
		$(selectors.idSaleEndTime).val(ticket.saleEndTime);
		$(selectors.idMinQuantity).val(ticket.minQuantity);
		$(selectors.idMaxQuantity).val(ticket.maxQuantity);
		$(selectors.idOnlyForGuests).prop('checked', ticket.onlyForGuests);
		$(selectors.idInviteByEmail).prop('checked', ticket.inviteByEmail);
		$(selectors.idInviteByPersonalLink).prop('checked', ticket.inviteByPersonalLink);
		$(selectors.idAbsorbServiceFee).prop('checked', ticket.absorbServiceFee);

		// Aesthetical effects
		self.setIsFree(ticket.isFree());

		// Show or hide "Advanced settings" panel
		self.setAdvancedOptionsVisibility(ticket.hasAdvancedSettings());

		// Show or hide "Privacy options" panel
		self.setPrivacyOptionsVisibility(ticket.onlyForGuests);
	},

	// Clear "Create / Edit ticket" form 
	clear: function() {
		var self = this;

		$(selectors.idTicketId).val(defaultValues.id);
		$(selectors.idTicketType).val(defaultValues.ticketType);
		$(selectors.idPrice).val(defaultValues.price);
		$(selectors.idQuantity).val(defaultValues.quantity);
		$(selectors.idDescription).val(defaultValues.description);
		$(selectors.idSaleStartDate).val(defaultValues.saleStartDate);
		$(selectors.idSaleStartTime).val(defaultValues.saleStartTime);
		$(selectors.idSaleEndDate).val(defaultValues.saleEndDate);
		$(selectors.idSaleEndTime).val(defaultValues.saleEndTime);
		$(selectors.idMinQuantity).val(defaultValues.minQuantity);
		$(selectors.idMaxQuantity).val(defaultValues.maxQuantity);
		$(selectors.idOnlyForGuests).prop('checked', defaultValues.onlyForGuests);
		$(selectors.idInviteByEmail).prop('checked', defaultValues.inviteByEmail);
		$(selectors.idInviteByPersonalLink).prop('checked', defaultValues.inviteByPersonalLink);
		$(selectors.idAbsorbServiceFee).prop('checked', defaultValues.absorbServiceFee);

		// Aesthetical effects
		self.setIsFree(false);
		self.setAdvancedOptionsVisibility(false);
		self.setPrivacyOptionsVisibility(false);
	},

	// Hide "Create / Edit ticket" form
	setFormVisibility: function(show) {
		$(selectors.idCreatingTicket).collapse(show == true ? 'show' : 'hide');
		$(selectors.idFinishedCreatingTicket).collapse(show == true ? 'hide' : 'show');
	},

	setAdvancedOptionsVisibility: function(show) {
		$(selectors.idHideAdvancedSettings).collapse(show == true ? 'show' : 'hide');
		$(selectors.idShowAdvancedSettings).collapse(show == true ? 'hide' : 'show');
	},

	setPrivacyOptionsVisibility: function(show) {
		$(selectors.idDivPrivacySettings).collapse(show == true ? 'show' : 'hide');
	},

	setIsFree: function(isFree) {
		$(selectors.idCheckboxIsFree).prop('checked', isFree);
		$(selectors.idDivIsFree).collapse(isFree ? 'hide' : 'show');
	},

	// Create a html representation of the ticket array
	toHTML: function() {
		var self = this;
		var tableHead = 	'<thead>' + 
		                    '    <tr>' + 
		                    '        <th class="text-center">Tipo</th>' + 
		                    '        <th class="text-center">Precio</th>' + 
		                    '        <th>Tasa</th>' + 
		                    '        <th>Precio final</th>' + 
		                    '        <th>Cantidad</th>' + 
		                    '        <th class="text-center">Actions</th>' + 
		                    '    </tr>' + 
		                    '</thead>';

		var tableRows = '';
		for (var index = 0; index < self.tickets.length; index++) {
			tableRows += self.tickets[index].toHTML();
		}

		var tableBody = 	'<tbody>' + tableRows + '</tbody>';
		var tableFoot = 	'<tfoot>' +
                            '    <tr>' +
                            '        <td colspan="6">&nbsp;</td>' +
                            '    </tr>' +
                            '</tfoot>';

		return tableHead + tableBody + tableFoot;
	},

	updateEditDeleteHandlers: function() {
		$(selectors.classEditTicket).unbind('click').click(window.editTicketHandler);
    	$(selectors.classDeleteTicket).unbind('click').click(window.deleteTicketHandler);
	},

	// Update ticket <table> to reflect the status of the ticket array
	updateTicketTable: function() {
		var self = this;
		$(selectors.idTicketTable).html(self.toHTML());
		self.updateEditDeleteHandlers();
	},

	// Create a new Ticket
	createTicket: function() {
		var self = this;
		$(selectors.idSaveSettings).unbind('click').click(function() { self.saveNewTicket(); });
		
		$(selectors.idIDontWantCreateMoreTickets).html("No quiero crear mas tiquetes");
		$(selectors.idSpanCreatingNewTicket).html(" Creando nuevo tiquete ");
		$(selectors.idSaveSettings).html('<i class="fa fa-arrow-right"></i>Crear tiquete');

		self.setFormVisibility(true);
		self.clear();
	},
	
	// Save new Ticket
	saveNewTicket: function() {
		var self = this;
		self.tickets.push(self.getTicketInfo());
		self.updateTicketTable();
		self.clear();
	},

	// Edit a ticket given its index
	loadTicket: function(index) {
		var self = this;
		self.ticketIndex = index;
		self.setTicketInfo(self.tickets[index]);
				
		$(selectors.idIDontWantCreateMoreTickets).html("Cancelar");
		$(selectors.idSpanCreatingNewTicket).html(" Editando tiquete ");
		$(selectors.idSaveSettings).html('<i class="fa fa-arrow-right"></i>Guardar');

		self.setFormVisibility(true);
		$(selectors.idSaveSettings).unbind('click').click(function() { self.saveEditedTicket(); });
	},

	// Save current edited ticket
	saveEditedTicket: function() {
		var self = this;
		self.tickets[self.ticketIndex] = self.getTicketInfo();
		self.updateTicketTable();
		self.clear();
		self.setFormVisibility(false);
	},

	// Delete a ticket given its index
	deleteTicket: function(index) {
		var self = this;
		self.tickets.splice(index, 1);
		self.updateTicketTable();
	}

};

