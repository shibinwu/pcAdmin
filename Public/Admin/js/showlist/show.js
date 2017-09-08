/**
 * Created by Administrator on 2017/9/8 0008.
 */
(function($) {
    //解决jQuery中$不存在问题，从新定义$
    jQuery.noConflict();
    jQuery(document).ready(function($){
        $(function(){
            //DOM动态修改分页的显示内容
            document.getElementById("dyntable_first").innerHTML = "首页";
            document.getElementById("dyntable_previous").innerHTML = "上一页";
            document.getElementById("dyntable_next").innerHTML = "下一页";
            document.getElementById("dyntable_last").innerHTML = "末页";
            //给删除按钮绑定点击事件
            $('.del').on('click',function(){
                //事件处理程序
                id = this.getAttribute('data-id');    //jQuery对象，类数组的对象
                window.location.href = '__CONTROLLER__/del/id/' + id;
            });
            //给编辑按钮绑定点击事件(用document解决分页后不能点击的bug)
            $(document).on('click',".edit",function(){
                //事件的处理程序
                id = this.getAttribute('data-id');//val方法是用于获取jQuery对象的值
                //alert(id);
                window.location.href = '__CONTROLLER__/edit/id/' + id;
            });
            //给退出按钮绑定点击事件
            $('.exit').click(function () {
                window.location.href = "/index.php/Admin/Public/logout";
            });
            //给所选li元素添加class="current"属性，显示箭头效果
            $(".headermenu>li").eq(0).addClass("current").siblings().removeClass("current")
        });
    });

})(jQuery);