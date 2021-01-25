<script>


    var colors = [
        "blue",
        "danger",
        "brown",
        "green",
        "grey",
        "indigo",
        "primary",
        "info",
        "danger",
        "warning",
        "success",
        "orange",
        "pink",
        "purple",
        "teal",
        "violet"
    ];
    var bool = true ;
    sentence = "Cümle yazın.";
    eq = "Karşılığını yazın.";
    desc = "İsteğe bağlı";

    var total_upd_btn = "";

    $( document ).ready(function() {
        $('#preview_button').click(function(){
            $('#modal_theme_success').modal({
                backdrop: 'static'
            });
        });			//modalı backdrop ile kapatmayı engelleme

        $(document).on('keydown', function(event) {
            if (event.key == "Escape") {
                close_dict_modal();
            }
        });		//modalı esc ile kapatmayı engelleme

        var sayac = $('input[name^="tab"]').length-1;
        $('#addSentences').click(function(e){
            e.preventDefault();
            sayac++;
            $( "products").before(function() {
                return "<hr class=\"border-1 border-"+colors[sayac]+"\">\n" +
                    "<div class=\"form-group\">\n" +
                    "                            <label id=\"word\"><b>Sekme Adı:</b></label>\n" +
                    "                            <input type=\"text\" name=\"tab"+sayac+"\" id=\"xx00\" class=\"form-control text-capitalize\" placeholder=\"Örn: Güneşte Kurutulmuş Domates\">\n" +
                    "                        </div>\n" +
                    "\n" +
                    "                        <div class=\"form-group\">\n" +
                    "                            <label id=\"xx1\"><b>Başlık:</b></label>\n" +
                    "                            <input type=\"text\" id=\"xx11\" placeholder=\"Örn: Yarım Kesim.\" name=\"title"+sayac+"\" class=\"form-control\">\n" +
                    "                        </div>\n" +
                    "\n" +
                    "                        <div class=\"form-group\">\n" +
                    "                            <label id=\"xx2\"><b>Açıklama:</b></label>\n" +
                    "                            <input type=\"text\" id=\"xx22\" placeholder=\"Örn: Yıkanıp, ortadan ikiye kesilen domatesler kükürtlü veya tuzlu solüsyon uygulandıktan sonra 5 ila 7 gün süreyle güneşte kurutulmaya bırakılır.\" name=\"desc"+sayac+"\" class=\"form-control\">\n" +
                    "                        </div>\n" +
                    "\n" +
                    "                        <div class=\"form-group\">\n" +
                    "                            <label><b>Görsel</b>(JPG, JPEG, PNG):</label>\n" +
                    "                            <input type=\"file\" class=\"form-input-styled\" name=\"img"+sayac+"\" id=\"xx33\" >\n" +
                    "                        </div>";
            });
        });				//cümle oluşturma

        $('input[name="lang"]').click(function(e){

            if(bool) {
                $("#word").html("Word");
                $("#wordinput").attr("placeholder", "Enter word.");
                $("#equal").html("Equivalent");
                bool = !bool;
                sentence = "Write a sentence.";
                eq = "Write a equivalent.";
                desc = "Optional";
                $("#xx1").html("Sentence:");
                $("#xx2").html("Equivalent:");
                $("#xx3").html("Description:");
                $("#xx11").attr("placeholder", "From language.");
                $("#xx22").attr("placeholder", "To language.");
                $("#xx33").attr("placeholder", "Optional.");
            }
            else
            {
                $("#word").html("Kelime");
                $("#wordinput").attr("placeholder", "Kelime girin.");
                $("#equal").html("Karşılığı");
                bool = !bool;
                sentence = "Cümle yazın.";
                eq = "Karşılığını yazın.";
                desc = "İsteğe bağlı";
                $("#xx1").html("Cümle:");
                $("#xx2").html("Karşılığı:");
                $("#xx3").html("Açıklama:");
                $("#xx11").attr("placeholder", "Kaynak dil.");
                $("#xx22").attr("placeholder", "Hedef dil.");
                $("#xx33").attr("placeholder", "İsteğe Bağlı.");
            }

        });		////component dili değiştirme

        total_upd_btn = $("button[id^='mean']").length;

        $(document).ready(function() {			//input focustayken enter engelleme
            $(window).keydown(function(event){
                if(event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
    });

    var word = "";
    var equals = [];
    var sents = [];
    var eqs = [];
    var descs = [];
    var return_vals = [];
    function dict_preview(){
        var adet = $('input[name^="sentence"]').length;
        word = $('input[name="word"]').val();
        equals = [];
        sents = [];
        eqs = [];
        descs = [];
        for(var i= 0; i<$(".token span").length; i++)
        {
            equals.push($(".token:eq("+i+") span").html()+", ");		//değişkenler dışarıya atılınca içindeki değerlerin yenilenmeleri kontrol edilecek.
        }
        for(var i =0; i< adet; i++)		//dolulukları kontrol edilecek.
        {
            sents.push($('input[name^="sentence'+i+'"]').val())
            eqs.push($('input[name^="equal'+i+'"]').val())
            descs.push($('textarea[name^="desc'+i+'"]').val())
        }
// console.log(word);
// console.log(equals);
// console.log(sents);
// console.log(eqs);
// console.log(descs);

        $( "modalinfos").before(function() {
            $("#modalWord").html(word);
            $("#modalEq").html(equals);
            for (var i = 0; i < adet; i++) {
                return_vals.push("<val"+i+">"+"\t\t\t\t\t\t\t<h6 class=\"font-weight-semibold \">Cümle : <i class=\"font-size-lg font-weight-normal\">"+sents[i]+"</i></h6>\n" +
                    "\t\t\t\t\t\t\t<h6 class=\"font-weight-semibold \">Cümlenin karşılığı : <i class=\"font-size-lg font-weight-normal\">"+eqs[i]+"</i> </h6>\n" +
                    "\t\t\t\t\t\t\t<h6 class=\"font-weight-semibold \">Cümlenin açıklaması : <i class=\"font-size-lg font-weight-normal\">"+descs[i]+"</i> </h6>\n" +
                    "\t\t\t\t\t\t<hr class=\"border-1\"></val>");
            }
            return return_vals;
        });
    }			///modal yazdırma

    function close_dict_modal(){
        for (var i = 0; i < return_vals.length; i++) {
            $("val"+i+"").remove()
        }
        return_vals = [];
    }		///modal kapatma

    function save_dict_modal(){
        $.ajax({
            type: "POST",
            url: "http://localhost/business/theDictionary/addword",
            dataType: "json",
            data: {
                bool : bool,
                word : word,
                equals : equals,
                sents : sents,
                eqs : eqs,
                descs : descs
            },
            success: function(result) {
                window.location.replace(result)
            },
            error: function(result) {
                alert('error');
            }
        });
    }			///modal kaydetme


</script>