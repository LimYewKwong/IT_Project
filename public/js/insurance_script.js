$(document).ready(function(){

  //Sorting Insurance Providers
  $('#lowestPrice').on('click', function(){
    var divList = $(".insurance_providers");
    divList.sort(function(a, b){
      return $(a).data("price")-$(b).data("price")
    });
    $(".insurance_providers_container").html(divList);
  });

  $('#lowestSum').on('click', function(){
    var divList = $(".insurance_providers");
    divList.sort(function(a, b){
      return $(b).data("sum")-$(a).data("sum")
    });
    $(".insurance_providers_container").html(divList);
  });

  $('.addon-table input').on('click', function(e){
    thisRadio = $(this);
    if (thisRadio.hasClass("imChecked")) {
      thisRadio.removeClass("imChecked");
      thisRadio.prop('checked', false);
      var addOnTotal = (parseFloat($("#addOnTotal").html()) - thisRadio.data('amount')).toFixed(2);
      var totalPayable = (parseFloat($("#totalPayable").html()) - thisRadio.data('amount')).toFixed(2);
    } else {
      thisRadio.prop('checked', true);
      thisRadio.addClass("imChecked");
      var addOnTotal = (parseFloat($("#addOnTotal").html()) + thisRadio.data('amount')).toFixed(2);
      var totalPayable = (parseFloat($("#totalPayable").html()) + thisRadio.data('amount')).toFixed(2);
    }
    $("#addOnTotal").html(addOnTotal);
    $("#totalPayable").html(totalPayable);
    $("#addOnTotal1").html(addOnTotal);
    $("#addOnTotalFinal").html(addOnTotal);
    $("#totalPayableDetails").html(totalPayable);
    $("#totalPayableFinal").html(totalPayable);
    $("#amount").val(totalPayable)
  });


  $('.hire_purchase_select input').on('click', function(e){
    $("#hire_purchase").val($(this).data('hire'));
    $(".hire_purchase_error").fadeOut();
  });

  $('.accidents_count input').on('click', function(e){
    $("#accidents").val($(this).data('accident'));
    $(".accidents_error").fadeOut();
  });


  $('#insuranceForm').validate({
    rules: {
      address1: {
        required: true
      },
      postcode: {
        required: true,
        maxlength: 5
      },
      city: {
        required: true
      },
      state: {
        required: true
      }
    },
    submitHandler: function (form) { // for demo
      alert('valid form');
      return false;
    }
  });

});


//change Insurance tabs
function changetab(tabIndex){
  if(tabIndex == 1){
    $("#next"+tabIndex).click();
    $("#next"+tabIndex).removeClass('active');
    removeActive()
    $(".detailstab").addClass('active');
    $(window).scrollTop(0);
  }
  else if(tabIndex == 2){
    if($("#accidents").val() == ""){
      $(".accidents_error").fadeIn();
      $("input[name='accident']").focus();
    }else{
      $("#next"+tabIndex).click();
      $("#next"+tabIndex).removeClass('active');
      removeActive()
      $(".addonstab").addClass('active');
      $(window).scrollTop(0);
    }
  }
  else if(tabIndex == 3){
    var addOnIds = [];
    $(".addon-table input[type=radio]:checked").each(function() {
      addOnIds.push(this.value);
    });
    $("#addon_id").val(addOnIds);

    $("#next"+tabIndex).click();
    $("#next"+tabIndex).removeClass('active');
    removeActive()
    $(".finaldetailstab").addClass('active');
    $(window).scrollTop(0);
  }
  else if(tabIndex == 4){
    if($('input[name="address1"]').valid() && $('input[name="postcode"]').valid() && $('input[name="city"]').valid() && $('input[name="state"]').valid()){
      if($("#hire_purchase").val() == ""){
        $(".hire_purchase_error").fadeIn();
        $("input[name='hire']").focus();
      }else{
        getAddress();
        $("#next"+tabIndex).click();
        $("#next"+tabIndex).removeClass('active');
        removeActive()
        $(".reviewtab").addClass('active');
        $(window).scrollTop(0);
      }
    }
  }
}

function removeActive(){
  $(".detailstab").removeClass('active');
  $(".addonstab").removeClass('active');
  $(".finaldetailstab").removeClass('active');
  $(".reviewtab").removeClass('active');
}


function getAddress(){
  var completeAddress = "";
  var addresses = document.getElementsByClassName('addressField')[0].getElementsByClassName('addressFields');
  for(address in addresses){
    if(addresses[address].value != "" && addresses[address].value != undefined){
      completeAddress += addresses[address].value+",";
    }
  }
  $("#correspondanceAddress").html(completeAddress.slice(0,-1));
}
