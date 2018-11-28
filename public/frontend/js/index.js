 //排行榜切换
// 加入收藏;
    function AddFavorite(sURL, sTitle) {
        try {
            window.external.addFavorite(sURL, sTitle)
        } catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "")
            } catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    }

// 设置主页
    function SetHome(obj, vrl) {
        try {
            obj.style.behavior = 'url(#default#homepage)';
            obj.setHomePage(vrl)
        } catch (e) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
                } catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。")
                }
                ;
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage', vrl)
            }
        }
    }


$(function () {
	$(".mnxl").hover(function () {
		 $(this).addClass("hover")
        }, function () {
            $(this).removeClass("hover")
	})
}); 
 
 
$(function () {
	$(".in_cp_list ul li").hover(function () {
		 $(this).addClass("hover")
        }, function () {
            $(this).removeClass("hover")
	})
}); 
 



//排行榜
$(function(){
	var rand = 0;
	var menu = $(".zc_text1");
	menu.each(function(i){
		rand = Math.ceil(Math.random()*6);
		$(".zc_text1:eq("+i+") li dl").each(function(m){
			if(m!=rand){
				$(this).hide();
				$(this).prev().removeClass('on');
				$(this).parent().removeClass('block_li');
			}else{
				$(this).show();
				$(this).prev().addClass('on');
				$(this).parent().addClass('block_li');
			}
		});
		
		$(".zc_text1:eq("+i+") li").each(function(j){
			var o = $(this);
			o.children('p').mouseover(function(){
				$(".zc_text1:eq("+i+") li dl").each(function(j){
					$(this).hide();
					$(this).prev().removeClass('on');
					$(this).parent().removeClass('block_li');
				});
				$(this).addClass('on').next().show();
				$(this).parent().addClass('block_li');
			});
		});
	});
	$('.zc_text1 li:last').addClass('qline');
	$('.btb ul li:last-child').addClass('qline');
	$('.zc_text1 li:lt(3)').addClass('red');
	$('.zc_text1 li:eq(0)').children().children('i').text("TOP1");
	$('.zc_text1 li:eq(1)').children().children('i').text("TOP2");
	$('.zc_text1 li:eq(2)').children().children('i').text("TOP3");
});


	
 
$(function(){
	$('.tab3').each(function(){
		var box = $(this);
		var sEvent = 'click';
		if (box.attr('data-event') == 'hover'){
			sEvent = 'mouseover';
		}
		$('.tab-hd3 > ul >li')[sEvent](function(){
			$(this).addClass('current').siblings().removeClass('current');
			$('.tab-bd3 ul').eq($(this).index()).show().siblings().hide();
		}).eq(0)[sEvent]();
	});
 });
 
 $(function(){
	$('.tab4').each(function(){
		var box = $(this);
		var sEvent = 'click';
		if (box.attr('data-event') == 'hover'){
			sEvent = 'mouseover';
		}
		$('.tab-hd4 > ul >li')[sEvent](function(){
			$(this).addClass('current').siblings().removeClass('current');
			$('.tab-bd4 ul').eq($(this).index()).show().siblings().hide();
		}).eq(0)[sEvent]();
	});
 });
 
  $(function(){
	$('.tab5').each(function(){
		var box = $(this);
		var sEvent = 'click';
		if (box.attr('data-event') == 'hover'){
			sEvent = 'mouseover';
		}
		$('.tab-hd5 > ul >li')[sEvent](function(){
			$(this).addClass('current').siblings().removeClass('current');
			$('.tab-bd5 .in_anli_list').eq($(this).index()).show().siblings().hide();
		}).eq(0)[sEvent]();
	});
 });
 
 
 
 /* 商机汇切换tab */
