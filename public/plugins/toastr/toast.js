$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

// Supper User Module
    // (Page:Unverified User) Approve  User Account
    $('.toastsApproveAccount').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The user account has been successfully approved.'
      })
    });

    // (Page:Unverified User) Delete User Account
    $('.toastsDeleteAccount').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Deleted',
        subtitle: '',
        body: 'The user account has been successfully deleted.'
      })
    });


  // (Page:Manage Department ) Confirm Edit Department
    $('.toastsConfirmEditDepertment').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The Department Name is successfully modified.'
      })
    });

    // :Delete Department Name
    $('.toastsDefaultDangerDepartmentName').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Deleted',
        subtitle: '',
        body: 'The Department Name is successfully deleted.'
      })
    });

    // (Page:Manage District ) Confirm Edit District
    $('.toastsConfirmEditDistrict').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The District Name is successfully modified.'
      })
    });

    // (Page:Manage District ) Confirm Delete District
    $('.toastsDeleteDistrict').click(function() {
    $(document).Toasts('create', {
      class: 'bg-danger',
      title: 'Deleted',
      subtitle: '',
      body: 'The District Name is successfully deleted.'
    })
  });
      
    // (Page:Restore Item )
    $('.toastsRestoreItem').click(function() {
    $(document).Toasts('create', {
      class: 'bg-success',
      title: 'Successful',
      subtitle: '',
      body: 'The User Account is successfully modified.'
    })
  });

  // (Page:Restore Account ) Confirm Delete District
  $('.toastRestoreAccounts').click(function() {
    $(document).Toasts('create', {
      class: 'bg-success',
      title: 'Successful',
      subtitle: '',
      body: 'The User Account is successfully restored.'
    })
  });


// Manager Module
    // Manager(Page:Stock List ) Edit Items
    $('.toastEditItem').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The items is successfully modified.'
      })
    });

    // wiv-review approve btn
    $('.toastApproveWiv').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The WIV request has been successfully approved.'
      })
    });

    // mrt-review approve btn
    $('.toastApproveMRT').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The MRT request has been successfully approved.'
      })
    });


    // (Page:Account Setting ) Edit Items
    $('.toastUpdateAccDetails').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The items is successfully modified.'
      })
    });

    // (Page:Change Password ) Edit Items
    $('.toastChangePassword').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'Your password is successfully updated.'
      })
    });

// Employee Module
       // Employee(Page:Return Item Request ) Edit Items
       $('.toastReturnItemReq').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Successful',
          subtitle: '',
          body: 'Returned item request is successfully in proccess.'
        })
      });

// Admin Module
      // (Page:Create RR ) Delete Item
      $('.FF').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Successful',
          subtitle: '',
          body: 'Recieving Report is successfully created.'
        })
      });
     
      
      // (Page:Item List ) Delete Item
      $('.toastDeleteItem').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Successful',
        subtitle: '',
        body: 'Item is successfully in deleted.'
      })
    });

    // (Page:Create  WIV) Delete Item
    $('.toastCreateWIV').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'WIV has been successfully created'
      })
    });

    // (Page:Create  MRT) Delete Item
    $('.toastCreateMRT').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'MRT has been successfully created'
      })
    });

    // (Page:Create  WIV) Delete Item
    $('.toastProcessMRT').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'MRT was successfully in process'
      })
    });
  


  });