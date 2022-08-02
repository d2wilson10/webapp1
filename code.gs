//https://www.bpwebs.com/pull-data-from-google-sheets-to-html-table/

function doGet() {
  return HtmlService.createTemplateFromFile('Index').evaluate();
}
 
//GET DATA FROM GOOGLE SHEET AND RETURN AS AN ARRAY
function getData(){
  var spreadSheetId = "1UIDIRyIn8smrytg5jz8Cq-ImpNr2Isj-yRe6yhlX-zo"; //CHANGE
  var dataRange     = "Sheet1!A2:C"; //CHANGE
 
  var range   = Sheets.Spreadsheets.Values.get(spreadSheetId,dataRange);
  var values  = range.values;
 
  return values;
}
 
//INCLUDE JAVASCRIPT AND CSS FILES
function include(filename) {
  return HtmlService.createHtmlOutputFromFile(filename)
      .getContent();
}