$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });


    // Superuser(Page:Unverified User) Approve  User Account
    $('.toastsApproveAccount').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The user account has been successfully approved.'
      })
    });

    //(Page:Unverified User) Delete User Account
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

    // Delete Department Name
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

      // (Page:Restore Item ) Confirm Edit District
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

    // Manager(Page:Stock List ) Edit Items
    $('.toastEditItem').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Successful',
        subtitle: '',
        body: 'The items is successfully modified.'
      })
    });

      // Manager(Page:Account Setting ) Edit Items
      $('.toastUpdateAccDetails').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Successful',
          subtitle: '',
          body: 'The items is successfully modified.'
        })
      });
  
      // Manager(Page:Change Password ) Edit Items
      $('.toastChangePassword').click(function() {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Successful',
          subtitle: '',
          body: 'Your password is successfully updated.'
        })
      });


  });