<style>
    :root {
        --dark-blue: #03071e;
        --dark-blue-70: #03071ea1;
        --brown: #370617;
        --red: #d00000;
        --red-dark: #9d0208;
        --red-light: #dc2f02;
        --orange: #e85d04;
        --yellow: #ffba08;
        --yellow2: #faa307;
        --yellow3: #f48c06;
        --transparant: #00000000;
        --text-white-inactive: #e2e2e2;
        --text-white: #f0f0f0;
        --text-white-70: #f0f0f0cf;
    }

    * {
        font-family: "Poppins", sans-serif;
        /* background-color: var(--dark-blue); */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
    }

    h1,
    p {
        color: var(--dark-blue);
    }

    button {
        color: var(--dark-blue);
        background-color: var(--transparant);
        border: 0;
    }

    button:hover {
        cursor: pointer;
    }

    header {
        background-color: var(--red);
        padding: 12px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    /* set to fix */
    header {
        position: sticky;
        top: 0;
    }

    header div {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    header button {
        color: var(--text-white-inactive);
        font-weight: 400;
        transition: ease-in;
        padding: 4px 8px;
        margin: 0 8px;
    }

    header button:hover {
        /* font-weight: 600; */
        /* text-decoration: underline; */
        color: var(--yellow);
    }

    button#hero {
        font-weight: 600;
        text-transform: uppercase;
        line-height: 90%;
        color: var(--text-white);
    }

    button#hero:hover {
        text-decoration: none;
    }

    #hamburger {
        /* color: white; */
        display: none;
    }

    #hamburger img {
        width: 25px;
        height: 25px;
    }

    .container {
        margin: 0 auto;
    }

    .section {
        border: 1px solid black;
        min-height: 65%;
        padding: 12px 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 4px;
    }

    .section h1 {
        text-transform: capitalize;
        border: 1px solid red;
    }

    .section p {
        text-align: center;
        width: 50%;
        border: 1px solid blue;
    }

    .section.inverted {
        background-color: var(--dark-blue);
    }

    .section.inverted>* {
        color: var(--text-white);
    }

    .card-container {
        display: flex;
        flex-direction: row;
        gap: 48px;
        margin-top: 32px;
    }

    .card {
        /* padding: 8px; */
        /* border: 1px solid var(--yellow2); */
        display: flex;
        flex-direction: column;
        align-items: start;
        transition: ease-out 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        cursor: pointer;
    }

    .card img {
        width: 150px;
        height: 150px;
        background-color: var(--yellow3);
        object-fit: cover;
        margin-bottom: 8px;
    }

    .card h5 {
        font-weight: 500;
        color: var(--text-white-70);
    }

    .card button {
        background-color: var(--yellow3);
        width: 100%;
        padding: 4px;
        margin-top: 16px;
        transition: ease-out 0.3s;
        font-weight: 600;
    }

    .card button:hover {
        background-color: var(--yellow);
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 32px;
    }

    .category {
        width: 128px;
        height: 128px;
        background-color: var(--yellow);
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
        justify-content: center;
        /* border: 1px solid black; */
        transition: ease-out 0.2s;
    }

    .category:hover {
        cursor: pointer;
        background-color: var(--yellow3);
    }

    .category img {
        height: 50%;
    }

    .category span {
        text-transform: uppercase;
        font-weight: 700;
    }

    #listKategori {
        padding-top: 64px;
        padding-bottom: 64px;
    }

    @media screen and (max-width: 768px) {
        header .right {
            display: none;
        }

        #hamburger {
            display: block;
        }
    }

    @media screen and (min-width: 1024px) {
        .container {
            width: 1024px;
        }
    }
</style>