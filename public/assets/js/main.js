jQuery(function() {
  jQuery(".datepicker").datepicker({dateFormat: "yy-mm-dd"});



  // Make tabs and pills have urls linking to the selected element
  var url = document.location.toString();
  if (url.match('#')) {
    jQuery('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
    jQuery('.nav-pills a[href="#' + url.split('#')[1] + '"]').tab('show');
  }
  jQuery('.nav-pills a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
    window.scrollTo(0, 0);
  });
  jQuery('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
    window.scrollTo(0, 0);
  });

});
