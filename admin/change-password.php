<?php require ('./header.php') ?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form action="/admin/action.php?action=change_password" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="mb-6 text-xl font-bold text-center">Change Password</h2>

        <div class="mb-4">
            <label for="oldPassword" class="block text-gray-700 font-bold mb-2">Old Password</label>
            <input 
                type="password" 
                id="oldPassword" 
                name="old_password"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label for="newPassword" class="block text-gray-700 font-bold mb-2">New Password</label>
            <input 
                type="password" 
                id="newPassword" 
                name="new_password"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="mb-4">
            <label for="confirmNewPassword" class="block text-gray-700 font-bold mb-2">Confirm New Password</label>
            <input 
                type="password" 
                id="confirmNewPassword" 
                name="confirm_new_password"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>

        <div class="text-center">
            <button 
                type="submit"
                class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300"
            >
                Change Password
            </button>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $("form").submit(function(event) {
            event.preventDefault()

            const oldPassword = $("[name=old_password]").val() 
            const newPassword = $("[name=new_password]").val() 
            const confirmNewPassword = $("[name=confirm_new_password]").val() 

            if(oldPassword.length < 6) {
                alert("Invalid old password")
                $("[name=old_password]").focus()
                return
            }

            if(newPassword.length < 6) {
                alert("New password must contain 6 character")
                $("[name=new_password]").focus()
                return
            }

            if(confirmNewPassword != newPassword) {
                alert("New password mismatch")
                $("[name=new_password]").focus()
                return
            }

            this.submit()
        }) 
    })
</script>

<?php require './footer.php' ?>