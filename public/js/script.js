/*Custom script*/


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    //input_val = "$" + left_side + "." + right_side;
	input_val = left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    //input_val = "$" + input_val;
	input_val = input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

function callajax(requrl, jsondata, cb){
	var requestUrl = SERVICEURL +"/"+ requrl;
	$.ajax({
		url:requestUrl,
		data:jsondata,
		type:"post",
		dataType:"json",
		success:function(resp){
			return cb(resp);
		},
		error:function(p1,p2,p3){
			
			printLog("p1");
			printLog(p1);
			printLog("p2");
			printLog(p2);
			printLog("p3");
			printLog(p3);
			return cb({C:777, R:[p1,p2,p3],M:"error"});
		}
	});
}

function isRealValue(arg){
	if(arg != "" && arg != null && arg != undefined){
		return true;
	}else{
		return false;	
	}
}

function printLog(arg){
	console.log(arg);
}

function showToast(err,msg){
	
	if(err > 0){
		//error
	}else{
		//success
	}

	alert(msg);
	//printLog(msg);

}	

function uniqueId(){
	var x = new Date();
	var UTCseconds = (x.getTime() + x.getTimezoneOffset()*60*1000);
	return UTCseconds;
}

function showLoader(){

}

function hideLoader(){
	
}