/*
* jQuery sentences to adapt and format imported content.
* qibdip 2011
* v1.2
*/
var $qibdip_basket=jQuery.noConflict();
$qibdip_basket(document).ready(function(){
    $qibdip_basket("#qibdip_basket_darrera").each(function(){
        $qibdip_basket(this).addClass("loading");
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=darrer";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #resultats",'',function(){
            $qibdip_basket(this).removeClass("loading");
            $qibdip_basket("#qibdip_basket_darrera #resultats:last").remove();
            $qibdip_basket("#qibdip_basket_darrera a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
            })
            $qibdip_basket("#qibdip_basket_darrera .jornadesSeguents").html(' ');
            $qibdip_basket('#qibdip_basket_darrera td:contains("[+]")').remove();
            $qibdip_basket('#qibdip_basket_darrera tr:first th:last').remove();
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
        $qibdip_basket(this).addClass("loading");
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=classificacio";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #classificacio",'',function(){
            $qibdip_basket(this).removeClass("loading");
            $qibdip_basket("#qibdip_basket_classificacio a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
            })
        });
    })
    $qibdip_basket("#qibdip_basket_propera").each(function(){
    $qibdip_basket(this).addClass("loading");
    var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=darrer";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #resultats",'',function(){
            $qibdip_basket(this).removeClass("loading");
            $qibdip_basket("#qibdip_basket_propera #resultats:first").remove();
            $qibdip_basket("#qibdip_basket_propera a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
            });
            $qibdip_basket('#qibdip_basket_propera td:contains("[+]")').remove();
            $qibdip_basket('#qibdip_basket_propera th:contains("Info.")').remove();
        });
    });
    $qibdip_basket("#qibdip_basket_calendari_tots").each(function(){
$qibdip_basket(this).addClass("loading");
var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=calendaritots";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #continguts",'',function(){
            $qibdip_basket(this).removeClass("loading");
            $qibdip_basket("#continguts h2").remove();
            $qibdip_basket("#continguts div.imprimir").remove();
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari tbody p").remove();
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari tbody tr:first").remove();
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari a").each(function(){
                var link=$qibdip_basket(this);
                link.replaceWith(link.html());
            });
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari td.alignleft").removeClass("alignleft");
            $qibdip_basket('#qibdip_basket_calendari_tots #calendari td:contains("[+]")').remove();
            $qibdip_basket('#qibdip_basket_calendari_tots #calendari th:contains("Més Info")').remove();
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari tr:first th:eq(0)").addClass("calendaricolumna1");
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari tr:first th:eq(1)").addClass("calendaricolumna2");
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari tr:first th:eq(2)").addClass("calendaricolumna3");
            $qibdip_basket("#qibdip_basket_calendari_tots #calendari tr:first th:eq(3)").addClass("calendaricolumna4");
        });
    });
    $qibdip_basket("#qibdip_basket_calendari").each(function(){
        $qibdip_basket(this).addClass("loading");
        var id=$qibdip_basket("#qibdip_id").val();
        var url=$qibdip_basket("#qibdip_parser_url").val()+"qibdip-parser.php";
        url=url+"?";
        url=url+"op=calendari";
        url=url+"&id="+id;
        $qibdip_basket(this).load(url+" #continguts",'',function(){
            $qibdip_basket(this).removeClass("loading");
            var titolprimer=$qibdip_basket("#qibdip_basket_calendari #calendari:first tr:first th").html();
            var titolsegon=$qibdip_basket("#qibdip_basket_calendari #calendari:last tr:first th").html();
            var seleccio=$qibdip_basket("#qibdip_basket_calendari #jorn option:selected").text();
            $qibdip_basket("#qibdip_basket_calendari #continguts h2").remove();
            $qibdip_basket("#qibdip_basket_calendari #continguts div.imprimir").remove();
            $qibdip_basket("#qibdip_basket_calendari #jornades").remove();
            $qibdip_basket("#qibdip_basket_calendari #calendari:first tr:first th").remove();
            $qibdip_basket("#qibdip_basket_calendari #calendari:last tr:first th").remove();
            $qibdip_basket("#qibdip_basket_calendari #calendari:first").before("<h2>"+titolprimer+"</h2>");
            $qibdip_basket("#qibdip_basket_calendari #calendari:last").before("<h2>"+titolsegon+"</h2>");
                        $qibdip_basket("#qibdip_basket_calendari #calendari a").each(function(){
                            var link=$qibdip_basket(this);
                            link.replaceWith(link.html());
                        });
            $qibdip_basket('#qibdip_basket_calendari #calendari td:contains("[+]")').remove();
            $qibdip_basket('#qibdip_basket_calendari #calendari th:contains("Més Info")').remove();
            $qibdip_basket("span.el_mes").append(" ("+seleccio+") ");
        });
    })
});