var ta = {
  initiatorId: 'bahoward',
  initiatorName: 'Bill Howard',
  initiatorDept: 'Information Systems',
  formId: buildFormId(new Date()),
  workflowId: '0',
  workflowStatus: 'Initiating form',
	travelStart: '',
	travelEnd: '',
  traveler: [travelerId, firstName, lastName, email, accountStatus, expenseId, itinerary, mileage, rental, hotel, airfare, advance, airfareTotal, advanceTotal],
  destination: [city, state, country, startDate, endDate],
  coding: [accountId, speedKey, fundId, ministryFunctionId, activityId, geographyId, costCenter, allocation],
  preparer: [preparerId, preparerName, preparerTitle],
	coder: [coderId, coderName, coderTitle],
	nonCAPApprover:[],
	director: [],
	vp: [],
	notify: [],
	notes: '',
	accessList: ''
};

$("#startDate").datepicker();
$("#endDate").datepicker();
$("#travelStart").datepicker();
$("#travelEnd").datepicker();

function buildFormId(now) {
  var yString = now.getFullYear().toString().substring(2,4);
  var m = now.getMonth() + 1;
  var mString = padValue(m);
  var d = now.getDate();
  var dString = padValue(d);
  var h = now.getHours();
  var hString = padValue(h);
  var t = now.getMinutes();
  var tString = padValue(t);
  var s = now.getSeconds();
  var sString = padValue(s);
  return ("TA." + yString + mString + dString + hString + tString + sString);
}

function padValue(v) {if (v < 10) {v = "0" + v;}; return v.toString();};

