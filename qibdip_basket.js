/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var $qibdip_basket=jQuery.noConflict();
$qibdip_basket(document).ready(function(){
    $qibdip_basket("#qibdip_basket_darrera").each(function(){
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=darrer";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #resultats",'',function(){
            $qibdip_basket("#qibdip_basket_darrera #resultats:last").remove();
            $qibdip_basket("#qibdip_basket_darrera a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
            })
            $qibdip_basket("#qibdip_basket_darrera .jornadesSeguents").html(' ');
            $qibdip_basket('#qibdip_basket_darrera td:contains("[+]")').remove();
        });
        $qibdip_basket("#qibdip_basket_titol").after('<div id="qibdip_basket_temporal"></div>');
        $qibdip_basket("#qibdip_basket_temporal").load(url+" #jorn",'',function(){
            var seleccio=$qibdip_basket("#jorn option:selected").text();
            var estrip=seleccio.split(" ");
            var jornada=estrip[0];
            var dia=estrip[1];
            $qibdip_basket("#qibdip_basket_titol").append(' a la '+jornada+'a jornada: '+dia);
            $qibdip_basket("#qibdip_basket_temporal").remove();
        });
    })
    $qibdip_basket("#qibdip_basket_classificacio").each(function(){
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=classificacio";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #classificacio",'',function(){
            $qibdip_basket("#qibdip_basket_classificacio a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
            })
        });
    })
    $qibdip_basket("#qibdip_basket_propera").each(function(){
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=darrer";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #resultats",'',function(){
            $qibdip_basket("#qibdip_basket_propera #resultats:first").remove();
            $qibdip_basket("#qibdip_basket_propera a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
                $qibdip_basket('#qibdip_basket_propera td:contains("[+]")').remove();
                $qibdip_basket('#qibdip_basket_propera th:contains("Info.")').remove();

            })
        });
    })
});