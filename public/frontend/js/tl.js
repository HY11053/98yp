$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#tj_btn").click(function(){
        var phoneno = $("#telephone").val();
        var name = $("#truename").val();
        var note = $("#content").val();
        var host=window.location.href;
        if(!name)
        {
            alert('请输入你们的姓名方便我们与您联系')
        }else{
            if( phoneno  && /^1[3|4|5|8]\d{9}$/.test(phoneno ) ){
                $.ajax({
                    type:"POST",
                    url:"/phonecomplate/",
                    //dataType: 'JSON',
                    data:{"phoneno":phoneno,"host":host,"name":name,"note":note},
                    datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".
                    success:function (response) {
                        alert(response);
                        $("#tj_btn").attr("disabled","disabled");
                    }
                });
            } else{
                alert("您输入的手机号码"+result+"不正确，请重新输入")
            }
        }
    })
});