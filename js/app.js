    $(document).ready(function(){    


            $("#btn-fold").prop("disabled",true);
            $("#btn-check").prop("disabled",true);
            $("#btn-raise").prop("disabled",true);
            $("#btn-call").prop("disabled",true); 

            $("#btn-newplay").click(function(){

                  plays++;      
                  
                  
                  $("#btn-newplay").prop("disabled",true); 
                  $("#btn-fold").prop("disabled",false);
                  $("#btn-check").prop("disabled",false);
                  $("#btn-raise").prop("disabled",false);
                  $("#btn-call").prop("disabled",false);     
                  
                  total = raise + fold + check + call;
                  perc_hand_match = (fold/plays)*100;
                  perc_hand_match = perc_hand_match.toFixed(2);

                  $("#total-score").text(plays);
                  $("#total-actions").text(total);
                  $("#total-fold").text(perc_hand_match + "%"); 

            });

            $("#btn-call").click(function(){
                call++;
                $("#call-score").text(call+" Volte");
                if(call==1)
                     $("#call-score").text("1 Volta");

                 total = raise + fold + check + call;   
                 perc_raise = (raise/total*100).toFixed(2);
                 perc_check = (check/total*100).toFixed(2);
                 perc_fold = (fold/total*100).toFixed(2);
                 perc_call = (call/total*100).toFixed(2);
                 $("#raise-perc").text(perc_raise + "%");
                 $("#check-perc").text(perc_check + "%");
                 $("#fold-perc").text(perc_fold + "%");
                 $("#call-perc").text(perc_call + "%");
 
            });



            $("#btn-raise").click(function(){
                raise++;
                $("#raise-score").text(raise+" Volte");
                if(raise==1)
                     $("#raise-score").text("1 Volta");

                 total = raise + fold + check + call;   
                 perc_raise = (raise/total*100).toFixed(2);
                 perc_check = (check/total*100).toFixed(2);
                 perc_fold = (fold/total*100).toFixed(2);
                 perc_call = (call/total*100).toFixed(2);
                 $("#raise-perc").text(perc_raise + "%");
                 $("#check-perc").text(perc_check + "%");
                 $("#fold-perc").text(perc_fold + "%");
                 $("#call-perc").text(perc_call + "%");
 
            });

            $("#btn-check").click(function(){
                check++;
                $("#check-score").text(check+" Volte");
                if(check==1)
                     $("#check-score").text("1 Volta");

                 total = raise + fold + check + call;   
                 perc_raise = (raise/total*100).toFixed(2);
                 perc_check = (check/total*100).toFixed(2);
                 perc_fold = (fold/total*100).toFixed(2);
                 perc_call = (call/total*100).toFixed(2);
                 $("#raise-perc").text(perc_raise + "%");
                 $("#check-perc").text(perc_check + "%");
                 $("#fold-perc").text(perc_fold + "%");
                 $("#call-perc").text(perc_call + "%");
            });        

            $("#btn-fold").click(function(){
                fold++;
                $("#fold-score").text(fold+" Volte");
                if(fold==1)
                     $("#fold-score").text("1 Volta");

                    
                 total = raise + fold + check + call;   
                 perc_raise = (raise/total*100).toFixed(2);
                 perc_check = (check/total*100).toFixed(2);
                 perc_fold = (fold/total*100).toFixed(2);
                 perc_call = (call/total*100).toFixed(2);
                 $("#raise-perc").text(perc_raise + "%");
                 $("#check-perc").text(perc_check + "%");
                 $("#fold-perc").text(perc_fold + "%");
                 $("#call-perc").text(perc_call + "%");

                  $("#btn-newplay").prop("disabled",false);  
                  $("#btn-fold").prop("disabled",true);
                  $("#btn-check").prop("disabled",true);
                  $("#btn-raise").prop("disabled",true);
                  $("#btn-call").prop("disabled",true);
            });

            

         });