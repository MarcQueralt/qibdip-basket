/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var $qibdip_basket=jQuery.noConflict();
$qibdip_basket(document).ready(function(){
    //    $qibdip_basket("#qibdip_darrera").each(function(){
    //        var id=$qibdip_basket("#qibdip_id").val();
    //        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
    //        url=url+"?";
    //        url=url+"op=darrer";
    //        url=url+"&id="+id;
    //        $qibdip_basket(this).load(url+" #resultats");
    //    })
    $qibdip_basket("#qibdip_classificacio").each(function(){
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=classificacio";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #classificacio");
    })
//    $qibdip_basket("#qibdip_propera").each(function(){
//        var id=$qibdip_basket("#qibdip_id").val();
//        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
//        url=url+"?";
//        url=url+"op=darrer";
//        url=url+"&id="+id;
//        $qibdip_basket(this).load(url+" #resultats");
//    })
//    $qibdip_basket("#qibdip_darrera #resultats:last").remove();
//    $qibdip_basket("#qibdip_propera #resultats:first").remove();
});
$qibdip_basket("#qibdip_classificacio").load(function(){
    $qibdip_basket("#qibdip_basket_container a").each(function(){
        var link=$qibdip_basket(this);
        link.replaceWith(link.html());
    });
})