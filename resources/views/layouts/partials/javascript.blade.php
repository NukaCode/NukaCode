<!-- javascript-->
{!! HTML::script('js/all.js') !!}

  <!-- JS Include -->
@section('jsInclude')
@show
  <!-- JS Include Form -->
@section('jsIncludeForm')
@show

<script>
  $(document).ready(function () {
    bootbox.setDefaults({backdrop: false});

    $("a.confirm-remove").click(function (e) {
      e.preventDefault();
      var location = $(this).attr('href');
      bootbox.dialog({
        title: 'You are about to delete an item',
        message: "This is not reversible.  Are you sure you want to proceed?",
        buttons: {
          success: {
            label: "Yes",
            className: "btn-primary",
            callback: function () {
              window.location.replace(location);
            }
          },
          danger: {
            label: "No",
            className: "btn-primary"
          }
        }
      });
    });
    $("a.confirm-continue").click(function (e) {
      e.preventDefault();
      var location = $(this).attr('href');
      bootbox.dialog({
        title: 'Verify before continuing',
        message: "Are you sure you want to continue?",
        buttons: {
          danger: {
            label: "No",
            className: "btn-primary"
          },
          success: {
            label: "Yes",
            className: "btn-primary",
            callback: function () {
              window.location.replace(location);
            }
          },
        }
      });
    });

    // Work around for multi data toggle modal
    // http://stackoverflow.com/questions/12286332/twitter-bootstrap-remote-modal-shows-same-content-everytime
    $('body').on('hidden.bs.modal', '#modal', function () {
      $(this).removeData('modal');
    });
    $("div[id$='Modal']").on('hidden.bs.modal', function () {
      $(this).removeData('bs.modal');
    });
    $("div[id$='modal']").on('hidden.bs.modal', function () {
      $(this).removeData('bs.modal');
    });

    var mainError = {!! (session()->has('error') ? json_encode(session()->get('error')) : 0) !!};
    var mainErrors = {!! (session()->has('errors') ? '"There was a problem with your request.<br />"+'. json_encode(implode('<br />', session()->get('errors')->all())) : 0) !!};
    var mainMessage = {!! (session()->has('message') ? json_encode(session()->get('message')) : 0) !!};
    var mainWarning = {!! (session()->has('warning') ? json_encode(session()->get('warning')) : 0) !!};

    $.notifyDefaults({
      placement: {
        from: 'bottom',
        align: 'right'
      },
      animate: {
        enter: 'animated fadeInUp',
        exit: 'animated fadeOutDown'
      },
      allow_dismiss: true
    });

    if (mainError != 0) {
      $.notify({
        message: mainError,
        icon: 'fa fa-exclamation-triangle'
      }, {
        // settings
        type: 'danger'
      });
    }

    if (mainErrors != 0) {
      $.each(mainErrors, function () {
        $.notify({
          message: this,
          icon: 'fa fa-exclamation-triangle'
        }, {
          // settings
          type: 'danger'
        });
      });
    }

    if (mainMessage != 0) {
      $.notify({
        message: mainMessage,
        icon: 'fa fa-info-circle'
      }, {
        // settings
        type: 'info'
      });
    }

    if (mainWarning != 0) {
      $.notify({
        message: mainWarning,
        icon: 'fa fa-info'
      }, {
        // settings
        type: 'warning'
      });
    }

    // On Ready Js
    @section('onReadyJs')
    @show
    // On Ready Js Form
    @section('onReadyJsForm')
    @show


  });
</script>

<!-- JS -->
@section('js')
@show
  <!-- JS Form -->
@section('jsForm')
@show
