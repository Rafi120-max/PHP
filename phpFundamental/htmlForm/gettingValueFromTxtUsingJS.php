<?php include('.//header.php') ?>

<script>

    function formFunction(){
       var name = document.myForm.userName.value;

       var showData = "User Name : " +name;
       document.getElementById('output').innerHTML = showData
    }
</script>

<section class="content">

<form action="" method="post"  name="myForm"  onsubmit="formFunction(); return false; ">
    <table>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="userName" required></td>
        </tr>
        <tr>

            <td>
                <input type="submit" value="submit">
                <input type="reset" value="claer">
            </td>
            
        </tr>
    
    </table>
</form>

<div id="output"></div>

</section>
<?php include('.//footer.php') ?>