                   /* APPELS JQUERY*/

           $(document).ready(function ()
           {
                      i=0;
                      
                       $('#valideNumber').click(function(){
                        if (   (i==0 && (document.getElementById('nom_dept').value!='')   ) || 

                                (i>=1 && (document.getElementById('nom_dept').value!='') )  

                           ) 
                       {


                      

                        i++;
                      //creation div principal

                       var big_div=document.createElement('div'); 
                       big_div.className='row';
                       

                      //creation div principal
 
                      //creation div secondaire

                       var sec_div=document.createElement('div'); 
                       sec_div.className='col-xs-10';
                       
                                       
                       //creation div secondaire

                        var otr_div=document.createElement('div'); 
                       

                       
                       for (var j= 1; j <=2; j++) 
                       { 
                           var check_formation=document.createElement('input');
                           check_formation.id=j+'e_cycle_option'+i;
                           check_formation.type="checkbox";
                           check_formation.title="cochez le "+j+"e Cycle pour cette option";
                           check_formation.style.marginLeft='10px';


                           otr_div.appendChild(check_formation);
                        
                       }                                   

                       var nom_opt=document.createElement('input');
                       nom_opt.type='text';
                       nom_opt.id='option'+i;
                       nom_opt.placeholder="Nom de l'option";
                       nom_opt.className='form-control ';

                       sec_div.appendChild(nom_opt);                   

                       big_div.appendChild(sec_div);
                       big_div.appendChild(otr_div);
                      
                       last=document.getElementById('valider');
                       
                       document.getElementsByTagName('form')[0].insertBefore(big_div,last);
                                                       
                    }

                   /* APPELS JQUERY*/

                   });

                                 
           });

                    
                   /* APPELS DOM*/
                  

                     /* APPELS DOM*/

