$(document).ready(function(){
    //insert data Poste
    $("#frm_postes").on("submit",function(e){
        e.preventDefault();
        var id_postes=$("#id_postes").val();
        var titre_postes=$("#titre_postes").val();
        var img_postes=$("#img_postes")[0].files;

       $.ajax({
           url:"Postes/insert_postes.php",
           method:"POST",
           data:new FormData(this),
           contentType:false,
           cache:false,
           processData:false,
           success:function(data){    
               $("#frm_postes")[0].reset();
               select_data();
           }
       });
    });

    //select data poste
    function select_data()
    {
        outPut_post="";
        $.ajax({
            url:"Postes/select_prostes.php",
            method:"GET",
            dataType:'JSON',
            success:function(data){
                if(data)
                    x=data;
                else
                    x="";
                for(i=0;i<x.length;i++)
                {
                    outPut_post +="<tr>"+
                        "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>"+data[i].ID_posts+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'><img src='avatar/"+data[i].Image+"' class='w-20'></td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>"+data[i].title+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500'>"+data[i].Date+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium'>"+
                            "<div class='space-x-3'>"+
                                "<button class='text-white bg-blue-500 p-2 rounded btn_modifier' data-id-post="+data[i].ID_posts+" onclick='openModal()'>Modifier</button>"+
                                "<button class='bg-red-500 text-white rounded p-2 btn_supprimer' data-id-post="+data[i].ID_posts+" >Supprimer</button>"+
                            "</div>"+
                        "</td>"
                    +"</tr>";
                }
                $("#tbody_postes").html(outPut_post);
            }
        })
    } 
    select_data();

    //Edit data poste
    $("tbody").on('click','.btn_modifier',function(){

        var ID_post=$(this).attr("data-id-post");
        MyData_prost={ID_post:ID_post};
        $.ajax({
            url:"Postes/edit_poste.php",
            method:"POST",
            dataType:"JSON",
            data:JSON.stringify(MyData_prost),
            success:function(data)
            {
                location.reload();
                $("#id_postes").val(data.ID_posts);
                $("#titre_postes").val(data.title);
            }
        })
    });

    //Delete data poste
    $("tbody").on('click','.btn_supprimer',function(){
        var id_post=$(this).attr("data-id-post");
        MyData_del_poste={id_post:id_post};
        this_btn_poste=this;
        $.ajax({
            url:"Postes/delete_poste.php",
            method:"POST",
            data:JSON.stringify(MyData_del_poste),
            success:function(data)
            {
                location.reload();
                $(this_btn_poste).closest("tr").fadeOut("slow");
                select_data();
            }
        })
    });

    /////////////////////////////////////////////////////
    /// Gestion admins
    /////////////////////////////////////////////////////
    //select data admin
    function select_data_admin()
    {
        outPut_admin="";
        $.ajax({
            url:"Admin_login/select_admin.php",
            method:"GET",
            dataType:'JSON',
            success:function(data){
                if(data)
                    x=data;
                else
                    x="";
                for(i=0;i<x.length;i++)
                {
                    outPut_admin +="<tr>"+
                        "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>"+data[i].ID_contact+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>"+data[i].username+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500'>"+data[i].Email+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500'>"+data[i].password+"</td>"
                        +"<td class='px-6 py-4 whitespace-no-wrap text-center border-b border-gray-200 text-sm leading-5 font-medium'>"+
                            "<div class='space-x-3'>"+
                                "<button class='text-white bg-blue-500 p-2 rounded btn_modifier' data-id-admin="+data[i].ID_contact+" onclick='openModal()'>Modifier</button>"+
                                "<button class='bg-red-500 text-white rounded p-2 btn_supprimer' data-id-admin="+data[i].ID_contact+" onclick='opendeleteModal()'>Supprimer</button>"+
                            "</div>"+
                        "</td>"
                    +"</tr>";
                }
                $("#tbody_admin").html(outPut_admin);
            }
        })
    } 
    select_data_admin();

     //insert data admin
     $("#frm_admin").on("submit",function(e){
        e.preventDefault();
        var id_admin=$("#id_admin").val();
        var username=$("#username").val();
        var email=$("#email").val();
        var password=$("#password").val();

        $.ajax({
            url:"Admin_login/insert_admin.php",
            method:"POST",
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data){    
                console.log(data);
                $("#frm_admin")[0].reset();
                select_data_admin();
            }
        });
     });

       //Delete data Admin
    $(".btn_delete_post_model").on('click',function(){
        var id_admin=$(".btn_supprimer").attr("data-id-admin");
        MyData_del_admin={id_admin:id_admin};
        this_btn_admin=this;
            $.ajax({
                url:"Admin_login/delete_admin.php",
                method:"POST",
                data:JSON.stringify(MyData_del_admin),
                success:function(data)
                {
                    location.reload();
                    //console.log(data);
                    $(this_btn_admin).closest("tr").fadeOut("slow");
                    select_data();
                }
            })
        });

         //Edit data admin
    $("tbody").on('click','.btn_modifier',function(){

        var ID_admin=$(this).attr("data-id-admin");
        MyData_admin={ID_admin:ID_admin};
        $.ajax({
            url:"Admin_login/edit_admin.php",
            method:"POST",
            dataType:"JSON",
            data:JSON.stringify(MyData_admin),
            success:function(data)
            {
                $("#id_admin").val(data.ID_contact );
                $("#username").val(data.username);
                $("#email").val(data.Email);
                $("#password").val(data.password);
            }
        })
    });


});