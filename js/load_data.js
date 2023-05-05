 function load_data(url){
      var limit=2;
      var start=0;
      var action='inactive';
      var url=url;
      function load_post(limit,start)
      {
        $.ajax({
         url:url,
         method:"POST",
         data:{limit:limit, start:start},
         cache:false,
         success:function(data)
         {
          $('#load_data').append(data);
          if(data=='')
          {
            $('#load_data_message').html("<p class='btn btn-danger'>No Data Found</p>");
          }
          else{
             $('#load_data_message').html("<p class=' btn btn-success'><i class='fa fa-spin fa-spinner mr-2' style='font-size:13px;'></i> Loading Data </p>");
              action="inactive";
          }
         }
        });
      }
      if(action=='inactive')
      {
        action='active';
        load_post(limit,start);
      }
      $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height()> $("#load_data").height() && action=='inactive')
        {
          action="active";
          start=start+limit;
          setTimeout(function(){
            load_post(limit,start);
          },1000);
        }
      });
      }