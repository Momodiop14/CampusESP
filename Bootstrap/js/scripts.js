$(document).ready(function () 
{
    $('#infos').modal('show');
   
    $('button#popover').click(function ()
     {
          $('button').popover({placement:'bottom'});
     });

    $('button#close_modal').click(function ()
     {
          $('#infos').modal('hide');
     });

    

	    //var table = $('#tableau').DataTable({"ordering": false});
 
       
         $('#tableau tbody').on( 'click', 'span.icon-delete', function () 
        {
            if (confirm('Voulez vous vraiment supprimer cette chambre ?')) 
              {

             
                    var param1 = encodeURIComponent( $(this).parents('tr').attr('id') );

                     nochambre=$('#'+param1+' td input:eq(0)').val();
                     
                     if (nochambre.length==3)
                            {
                              prefix=nochambre.charAt(0)+nochambre.charAt(1);
                              suffix=nochambre.charAt(2);
                            }
                          else
                            if (nochambre.length==2) 
                                   {
                                     prefix=nochambre.charAt(0);
                                     suffix=nochambre.charAt(1);
                                   }
 
                     

                     $.ajax({
                              url : "index.php?action=del_chambre", // on donne l'URL du fichier de traitement
                              type : "POST", // la requête est de type POST
                              data : "param1="+ param1  //  on envoie nos données
                           });

                     var tr=($(this).parents('tr'));

                                                                       
                        tr.remove();
                        

                     $("#tableau input.no_chambre").each( function (index ) 

                        {
                             if (index==parseInt(prefix)-1)
                               {
                                 this.value=prefix+suffix;
                                 prefix++;
                               }
                        });
                     

                      
                    
                    
                   }
       

        
       });

  });