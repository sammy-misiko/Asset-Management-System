

function showAssetReg(){  
    $.ajax({
        url:"./adminView/viewAssetReg.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showAssets(){  
    $.ajax({
        url:"./adminView/viewAssets.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showDepartment(){  
    $.ajax({
        url:"./adminView/viewDepartment.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showIssuanceReg(){  
    $.ajax({
        url:"./adminView/viewIssuanceReg.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// show all users
function showUsers(){
    $.ajax({
        url:"./adminView/viewUsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// show assets in storage
function showStorage(){
    $.ajax({
        url:"./adminView/viewStore.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// show all records of recalled assets
function showRecalled(){
    $.ajax({
        url:"./adminView/viewRecalled.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// show all assets marked for disposal
function showDispose(){
    $.ajax({
        url:"./adminView/viewDispose.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}



//show reports
function showReports(){  
    $.ajax({
        url:"./adminView/viewReports.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show assets reports
function userReport(){  
    $.ajax({
        url:"./adminView/viewUserReport.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show assets reports
function assetReport(){  
    $.ajax({
        url:"./adminView/viewAssetsReports.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// Trace the transaction of an asset
function assetTrace(){  
    $.ajax({
        url:"./adminView/viewAssetsTrace.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//show assets issuance reports
function issuanceReport(){  
    $.ajax({
        url:"./adminView/viewIssuanceReport.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// show assets in store ready for issuance
function storeAssetReport(){  
    $.ajax({
        url:"./adminView/viewStoreAssetReport.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show issued assets reports
function issuedAssetsReport(){  
    $.ajax({
        url:"./adminView/viewIssuedAssetReport.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show disposed assets reports
function disposedReport(){  
    $.ajax({
        url:"./adminView/viewDisposedAssetReport.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show add department form
function departmentForm(){  
    $.ajax({
        url:"./adminView/viewAddDepartment.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show add section form
function sectionForm(){  
    $.ajax({
        url:"./adminView/viewAddSection.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show add asset form
function assetForm(){  
    $.ajax({
        url:"./adminView/viewAddAsset.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show add user form
function userForm(){  
    $.ajax({
        url:"./adminView/viewAddUser.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show recall asset form
function recallForm(){  
    $.ajax({
        url:"./adminView/viewRecallAsset.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//show issue asset form
function issueForm(){  
    $.ajax({
        url:"./adminView/viewIssueAsset.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//add user after submit
function addUser(){
    var uname = $('#uname').val();
    var depname = $('#depname').val();
    var staffno = $('#staffno').val();
    var upload = $('#upload').val();

    var fd = new FormData();
    fd.append('uname', uname);
    fd.append('depname', depname);
    fd.append('staffno', staffno);
    fd.append('upload', upload);
   
    $.ajax({
      url:'./controller/addUserController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('User Added Successfully.');
       // $('form').trigger('reset');
        userForm();
      }
    });
    return false;
}



//delete user data
function userDelete(username){
    $.ajax({
        url:"./controller/userDeleteController.php",
        method:"post",
        data:{record:username},
        success:function(data){
            alert('User Successfully deleted');
            $('form').trigger('reset');
            showUsers();
        }
    });
}

//delete asset data
function assetDelete(id){
    $.ajax({
        url:"./controller/assetDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Aaaset Successfully deleted');
            $('form').trigger('reset');
            showAssets();
        }
    });
}


//delete department data
function depDelete(id){
    $.ajax({
        url:"./controller/departmentDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showDepartment();
        }
    });
}

//Dispose an asset
function assetDispose(id){
    $.ajax({
        url:"./controller/disposeAssetController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully Disposed');
            $('form').trigger('reset');
            showDispose();
        }
    });
}

//Dispose all assets with state disposal
function assetDisposeAll(){
    $.ajax({
        url:"./controller/disposeAllAssetController.php",
        method:"post",
        data:{record:1},
        success:function(data){
            alert('Successfully Disposed All');
            $('form').trigger('reset');
            showDispose();
        }
    });
}

//edit asset state in store data
function stateEditForm(id){
    $.ajax({
        url:"./adminView/stateEditForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//edit asset data
function assetEditForm(id){
    $.ajax({
        url:"./adminView/editAssetForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//update assets after submit
function updateAssets(){
    var serialno = $('#serialno').val();
    var name = $('#name').val();
    var model = $('#model').val();
    var state = $('#state').val();
    var tag = $('#tag').val();
    var region = $('#region').val();
    var supplier = $('#supplier').val();
    var p_price = $('#p_price').val();
    var p_date = $('#p_date').val();
    var fd = new FormData();
    fd.append('serialno', serialno);
    fd.append('name', name);
    fd.append('model', model);
    fd.append('state', state);
    fd.append('tag', tag);
    fd.append('region', region);
    fd.append('supplier', supplier);
    fd.append('p_price', p_price);
    fd.append('p_date', p_date);
   
    $.ajax({
      url:'./controller/assetUpdateController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Update Success.');
        $('form').trigger('reset');
        showAssets();
      }
    });
}

//issue assets after submit
function issueAssets(){
    var serialno = $('#serialno').val();
    var issuedby = $('#isuedby').val();
    var issuedto = $('#issuedto').val();
    var state = $('#state').val();
    var upload = $('#upload').val();

    var fd = new FormData();
    fd.append('serialno', serialno);
    fd.append('issuedby', issuedby);
    fd.append('issuedto', issuedto);
    fd.append('state', state);
    fd.append('upload', upload);

   
    $.ajax({
      url:'./controller/issueAssetController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Issued Success.');
        $('form').trigger('reset');
        showIssuanceReg();
      }
    });
}



//dynamic dropdown
function handleDynamicDropdown() {
    $('#receivedfrom').on('input', function() {
        var input = $(this).val();
        if (input.length >= 1) {
            $.ajax({
                url: './controller/getDynamicController.php',
                method: 'POST',
                data: { input: input },
                dataType: 'json',
                success: function(response) {
                    var options = response.options;
                    var dropdown = $('#serial');
                    
                    // Clear existing options
                    dropdown.empty();

                    // Add new options
                    $.each(options, function(index, option) {
                        dropdown.append('<option value="' + option + '">' + option + '</option>');
                    });

                    // Enable the dropdown
                    dropdown.prop('disabled', false);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        } else {
            // Clear and disable the dropdown if input is empty
            $('#serial').empty().prop('disabled', true);
        }
    });
}



// $(document).ready(function() {
//     // Function to update the "Received From" dropdown based on the selected "Received By" value
//     function updateReceivedFromDropdown(selectedValue) {
//       $.ajax({
//         url: './controller/dynamicDrop.php', // Create a separate PHP file to fetch the options dynamically
//         method: 'POST',
//         data: { receivedfrom: selectedValue },
//         success: function(data) {
//           $('#serialno').html(data);
//         },
//         error: function() {
//           alert('Error while fetching options.');
//         }
//       });
//     }

//     // Call the function initially to set the options for the "Received From" dropdown
//     updateReceivedFromDropdown($('#receivedfrom').val());

//     // Attach event listener to the "Received By" dropdown to update the "Received From" dropdown when its value changes
//     $('#receivedfrom').on('change', function() {
//       updateReceivedFromDropdown($(this).val());
//     });
//   });