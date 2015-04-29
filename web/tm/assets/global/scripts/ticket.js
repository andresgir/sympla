// Default values
var defaultValues = {
	'id': 					0,
	'ticketType': 			'',
	'price': 				0.0,
	'quantity':				0,
	'description': 			'',
	'saleStartDate': 		'',
	'saleStartTime': 		'',
	'saleEndDate':			'',
	'saleEndTime': 			'',
	'minQuantity': 			0,
	'maxQuantity': 			0,
	'onlyForGuests': 		false,
	'inviteByEmail': 		false,
	'inviteByPersonalLink': false,
	'absorbServiceFee': 	false, 
};

function Ticket (options) {
	var self = this;

	for (var index in defaultValues) {
		if (typeof options[index] == "undefined") {
			options[index] = defaultValues[index];
		}
	}

	self.id = 					options['id'];
	self.ticketType = 			options['ticketType'];
	self.price = 				parseFloat(options['price']);
	self.quantity = 			options['quantity'];
	self.description = 			options['description'];
	self.saleStartDate = 		options['saleStartDate'];
	self.saleStartTime = 		options['saleStartTime'];
	self.saleEndDate = 			options['saleEndDate'];
	self.saleEndTime = 			options['saleEndTime'];
	self.minQuantity = 			options['minQuantity'];
	self.maxQuantity = 			options['maxQuantity'];
	self.onlyForGuests = 		options['onlyForGuests'];
	self.inviteByEmail = 		options['inviteByEmail'];
	self.inviteByPersonalLink = options['inviteByPersonalLink'];
	self.absorbServiceFee = 	options['absorbServiceFee'];
};

Ticket.prototype = {
	// Constructor
	constructor: Ticket,

	// Returns true if a ticket is free, otherwise false
	isFree: function() {
		var self = this;
		return self.price == defaultValues['price'];
	},

	// Returns false if none of the "advanced settings" of the ticket was filled, otherwise true
	hasAdvancedSettings: function() {
		var self = this;

		return (
			self.description != defaultValues['description'] ||
			self.saleStartDate != defaultValues['saleStartDate'] ||
			self.saleStartTime != defaultValues['saleStartTime'] ||
			self.saleEndDate != defaultValues['saleEndDate'] ||
			self.saleEndTime != defaultValues['saleEndTime'] ||
			self.minQuantity != defaultValues['minQuantity'] ||
			self.maxQuantity != defaultValues['maxQuantity'] ||
			self.onlyForGuests != defaultValues['onlyForGuests'] ||
			self.inviteByEmail != defaultValues['inviteByEmail'] ||
			self.inviteByPersonalLink != defaultValues['inviteByPersonalLink']);
	},

	// Ticket fee (percent), 10%
	// Business Rule
	getFee: function() {
		var self = this;
		return self.price * 0.1;
	},

	// Returns the producer price
	// Business Rule
	getProducerPrice: function() {
		var self = this;

		if (self.absorbServiceFee == true) {
			return self.price - self.getFee();
		} else {
			return self.price;
		}
	},

	// Returns the customer price
	// Business Rule
	getCustomerPrice: function() {
		var self = this;

		if (self.absorbServiceFee == true) {
			return self.price;
		} else {
			return self.price + self.getFee();
		}
	},

	// Returns an HTML representation (a <tr> row) of the ticket
	toHTML: function() {
		var self = this;

		var ticketDataAttributes = 
			'data-ticket-type="' + 				self.ticketType + '" ' + 
			'data-price="' + 					self.price + '" ' +
			'data-quantity="' + 				self.quantity + '" ' +
			'data-description="' + 				self.description + '" ' +
			'data-sale-start-date="' + 			self.saleStartDate + '" ' +
			'data-sale-start-time="' + 			self.saleStartTime + '" ' +
			'data-sale-end-date="' + 			self.saleEndDate + '" ' +
			'data-sale-end-time="' + 			self.saleEndTime + '" ' +
			'data-min-quantity="' + 			self.minQuantity + '" ' +
			'data-max-quantity="' + 			self.maxQuantity + '" ' +
			'data-only-for-guests="' + 			self.onlyForGuests + '" ' +
			'data-invite-by-email="' + 			self.inviteByEmail + '" ' +
			'data-invite-by-personal-link="' + 	self.inviteByPersonalLink + '" ' +
			'data-data-absorb-service-fee="' + 	self.absorbServiceFee + '"';

		var ticketTypeColumn = 		'<td><a href="javascript:void(0);" ' + ticketDataAttributes + ' ' +
									'class="edit-ticket">' + self.ticketType + '</a></td>';
		var producerPriceColumn = 	'<td>' + self.getProducerPrice() + 	'</td>';
		var feeColumn = 			'<td>' + self.getFee() + 			'</td>';
		var customerPriceColumn = 	'<td>' + self.getCustomerPrice() + 	'</td>';
		var quantityColumn = 		'<td>' + self.quantity + 			'</td>';
		var actionsColumn = 		'<td><a href="#modal-regular2" class="delete-ticket" data-toggle="modal">Borrar</a></td>';

		return '<tr>' + ticketTypeColumn + 
						producerPriceColumn + 
						feeColumn + 
						customerPriceColumn + 
						quantityColumn + 
						actionsColumn + '</tr>';
	}
};