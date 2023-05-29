<script>
    import { router } from '@inertiajs/svelte';

    let values = {
        email: '',
        password: ''
    }

    function handleSubmit(){
        router.post('/login', values);
    }
</script>

<form on:submit|preventDefault={handleSubmit} action="post">
    <label for="email">e-mail</label>
    <input type="email" name="email" id="email" bind:value={values.email}>

    <label for="password">password</label>
    <input type="password" name="password" id="password" bind:value={values.password}>

    <button type="submit">log-in!</button>
</form>
