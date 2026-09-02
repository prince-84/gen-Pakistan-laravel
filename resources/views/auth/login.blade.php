<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>CMS Login | GEN Pakistan</title>

@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<main class="login-screen">

    <div class="login-box">

        {{-- Logo & Heading --}}
        <section class="title-section">

            <img
                src="/images/gen_logo.png"
                alt="GEN Pakistan"
                class="login-logo"
            >

            <h1 class="welcome">
                Welcome
            </h1>

            <p class="subtitle">
                Sign in to CMS
            </p>

        </section>


        {{-- Login Form --}}
        <section class="input-section">

            <form
                action="/admin/login"
                method="POST"
                class="login-form"
            >
                @csrf

                {{-- Email --}}
                <div class="field-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="name@company.com"
                    >

                    @error('email')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Password --}}
                <div class="field-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    >

                    @error('password')
                        <p class="error-message">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Remember Me --}}
                <div class="remember-row">

                    <input
                        id="remember"
                        type="checkbox"
                        name="remember"
                        value="1"
                    >

                    <label for="remember">
                        Remember me
                    </label>

                </div>


                {{-- Submit --}}
                <button
                    type="submit"
                    class="login-button"
                >
                    Sign In
                </button>

            </form>

        </section>


        {{-- Footer / Support --}}
        <section class="button-section">

            <p class="support-text">
                Having trouble signing in?
                <a href="#">
                    Contact support
                </a>
            </p>

            <p class="security-text">
                Private content management system
            </p>

        </section>

    </div>

</main>


<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        min-width: 320px;
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
        background: rgb(233, 230, 255);
    }

    .login-screen {
        width: 100%;
        min-height: 100vh;
        padding: 24px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-box {
        width: 100%;
        max-width: 370px;
        min-height: 430px;
        padding: 28px 30px 24px;

        background: #ffffff;
        border: 1px solid rgba(52, 52, 53, 0.08);
        border-radius: 12px;

        box-shadow:
            5px 5px 14px rgba(52, 52, 53, 0.16);

        display: grid;
        grid-template-rows: auto auto auto;
        gap: 22px;

        transition:
            box-shadow 0.2s ease,
            transform 0.2s ease;
    }

    .login-box:hover {
        box-shadow:
            -5px 5px 14px rgba(52, 52, 53, 0.16);
    }


    /* ------------------------------
       Header
    ------------------------------ */

    .title-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 7px;
    }

    .login-logo {
        width: auto;
        height: 58px;
        max-width: 190px;
        object-fit: contain;
        margin-bottom: 3px;
    }

    .welcome {
        color: rgb(52, 52, 53);
        font-size: 1.25rem;
        font-weight: 600;
        line-height: 1.2;
    }

    .subtitle {
        color: rgb(100, 100, 100);
        font-size: 0.8rem;
        font-weight: 400;
    }


    /* ------------------------------
       Form
    ------------------------------ */

    .input-section {
        width: 100%;
    }

    .login-form {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .field-group {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 7px;
    }

    .field-group label {
        color: rgb(52, 52, 53);
        font-size: 0.78rem;
        font-weight: 600;
    }

    .field-group input[type="email"],
    .field-group input[type="password"] {
        width: 100%;
        height: 40px;

        padding: 0 12px;

        background: #ffffff;
        border: 1px solid rgb(210, 210, 214);
        border-radius: 6px;

        color: rgb(52, 52, 53);
        font-family: inherit;
        font-size: 0.82rem;

        outline: none;

        transition:
            border-color 0.18s ease,
            box-shadow 0.18s ease;
    }

    .field-group input::placeholder {
        color: rgb(165, 165, 165);
    }

    .field-group input:focus {
        border-color: rgb(60, 60, 65);
        box-shadow: 0 0 0 3px rgba(60, 60, 65, 0.08);
    }

    .error-message {
        color: #dc2626;
        font-size: 0.72rem;
        line-height: 1.35;
    }

    .remember-row {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: -2px;
    }

    .remember-row input {
        width: 14px;
        height: 14px;
        margin: 0;
        accent-color: rgb(52, 52, 53);
        cursor: pointer;
    }

    .remember-row label {
        color: rgb(95, 95, 95);
        font-size: 0.74rem;
        cursor: pointer;
        user-select: none;
    }


    /* ------------------------------
       Button
    ------------------------------ */

    .login-button {
        width: 100%;
        height: 40px;

        margin-top: 2px;

        border: none;
        border-radius: 6px;

        background: rgb(52, 52, 53);
        color: #ffffff;

        font-family: inherit;
        font-size: 0.82rem;
        font-weight: 600;

        cursor: pointer;

        box-shadow:
            2px 3px 6px rgba(29, 29, 31, 0.18);

        transition:
            background-color 0.18s ease,
            transform 0.18s ease,
            box-shadow 0.18s ease;
    }

    .login-button:hover {
        background: rgb(70, 70, 72);

        box-shadow:
            2px 4px 8px rgba(29, 29, 31, 0.22);
    }

    .login-button:active {
        transform: translateY(1px);
    }

    .login-button:focus-visible {
        outline: 3px solid rgba(52, 52, 53, 0.16);
        outline-offset: 2px;
    }


    /* ------------------------------
       Footer
    ------------------------------ */

    .button-section {
        min-width: 0;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;

        gap: 9px;

        text-align: center;
    }

    .support-text {
        color: rgb(100, 100, 100);
        font-size: 0.72rem;
        line-height: 1.5;
    }

    .support-text a {
        color: rgb(52, 52, 53);
        font-weight: 600;
        text-decoration: none;
    }

    .support-text a:hover {
        text-decoration: underline;
    }

    .security-text {
        color: rgb(150, 150, 150);
        font-size: 0.68rem;
        font-weight: 400;
    }


    /* ------------------------------
       Responsive
    ------------------------------ */

    @media (max-width: 480px) {

        .login-screen {
            padding: 16px;
        }

        .login-box {
            max-width: 360px;
            min-height: 420px;
            padding: 25px 22px 22px;
        }

    }

    @media (max-width: 360px) {

        .login-screen {
            padding: 10px;
        }

        .login-box {
            padding: 22px 18px 20px;
            border-radius: 10px;
        }

        .login-logo {
            height: 52px;
        }

    }
</style>

</body>
</html>
