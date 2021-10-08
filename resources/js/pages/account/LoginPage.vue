<template>
    <div class="row justify-content-center">
        <div class="col-sm-5 div-mid">
            <h1 class="display-3">MineSocial</h1>
            <h3>Catch up with your Minecraft Friends!</h3>
            <hr>
            <router-link to="/account/register">
                <button class="btn btn-secondary btn-lg">Create an account</button>
            </router-link>
        </div>
        <div class="col-sm-4 offset-sm-1 loginform bg-dark-dm div-mid">
            <div class="form-group">
                <label for="username" class="required">Username</label>
                <input type="text" class="form-control" id="username" required="required">
            </div>
            <div class="form-group">
                <label for="password" class="required">Password</label>
                <input type="password" class="form-control" id="password" required="required">
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-success">Log in</button>
                </div>
                <div class="col text-right">
                    <router-link to="/account/register" class="btn btn-link">Register</router-link>
                </div>
            </div>
            <div class="text-center">
                <router-link to="/account/forgotpassword"><button class="btn btn-link">Forgot your password?</button></router-link>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .div-mid {
        padding-top: 15rem !important;
    }

    .loginform {
        height: 100vh;
        padding: 4rem;
    }
</style>