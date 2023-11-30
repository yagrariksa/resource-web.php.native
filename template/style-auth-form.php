<style>
    .container#login-container,
    .container#register-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 100px;
        height: 70vh;
    }

    .wrapper {
        background-color: var(--bg-grey);
        padding: 32px;
        display: flex;
        flex-direction: column;
        gap: 16px;
        align-items: center;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 16px;
        /* border: 1px solid black; */
    }

    input {
        border: 1px solid var(--dark-blue);
        background-color: var(--transparant);
        padding: 8px;
        border-radius: 8px;
        min-width: 300px;
        width: 25vw;
    }

    button#form-submit {
        background-color: var(--red);
        color: var(--text-white);
        padding: 12px;
        border-radius: 8px;
    }

    button#form-submit:hover {
        background-color: var(--orange);
    }
</style>