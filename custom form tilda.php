<style>
    .custom-form-area {
        font-family: Montserrat, sans-serif;
        max-width: 400px;
        width: 100%;
        border: 1px solid #f2e1e1;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px 0;
        background: #fff;
    }
    .custom-form-area p {
        text-align: center;
        width: 300px;
        font-size: 13px;
    }
    .custom-form-area p > a {
        color: #000 !important;
        text-decoration: underline !important;
    }
    .custom-form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-bottom: 15px;
    }
    .custom-form-title {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
        margin-bottom: 40px;
    }
    .custom-form-title h2 {
        font-family: Montserrat, sans-serif;
        font-size: 20px;
    }
    .custom-form-title span {
        font-family: Montserrat, sans-serif;
        font-size: 17px;
    }
    .custom-select {
        font-family: Montserrat, sans-serif;
        position: relative;
        width: 300px;
        border-radius: 15px;
        margin-bottom: 16px;
        height: 59px;
        display: flex;
        align-items: center;
        border: 1px solid #000;
    }
    .custom-form select {
        font-family: Montserrat, sans-serif;
        width: 100%;
        height: 100%;
        color: #000;
        font-size: 17px;
        border: 0;
        background: transparent;
        appearance: none;
        padding-left: 10px;
    }
    .custom-select::after {
        content: ' ';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 6px 5px 0 5px;
        border-color: #000 transparent transparent transparent;
        position: absolute;
        right: 12px;
        top: 0;
        bottom: 0;
        margin: auto;
        pointer-events: none;
    }
    .custom-form input {
        border: 1px solid #000;
        height: 59px;
        font-size: 17px;
        border-radius: 15px;
        margin-bottom: 16px;
        padding-left: 10px;
    }
    .custom-submit-button {
        background: #991010;
        color: #fff;
        font-weight: 600;
        border: 0 !important;
        cursor: pointer;
    }
</style>
<div class="custom-form-area">
    <div class="custom-form-title">
        <h2>Apr????iniet noliktavas</h2>
        <span>nomas izmaksas</span>
    </div>
    <form class="custom-form" action="http://form.noliktava1.lv/display.php" method="GET">
        <div class="custom-select">
            <select name="area-tilda-select">
                <option value="">Izv??l??ties rajonu</option>
                <option value="centrs">Centrs</option>
                <option value="zolitude">Zolitude</option>
                <option value="purvciems">Purvciems</option>
                <option value="imanta">Imanta</option>
                <option value="teika">Teika</option>
                <option value="ziepniekkalns">Ziepniekkalns</option>
            </select>
        </div>
        <div class="custom-select">
            <select name="term-tilda-select">
                <option value="">Nomas termi????</option>
                <option value="one">1 m??nesis</option>
                <option value="two">2 m??nesi</option>
                <option value="three-to-six">3-6 m??nesi</option>
                <option value="six-to-twelve">6-12 m??nesi</option>
                <option value="twelve">12 m??nesi</option>
                <option value="twenty-four">24 m??nesi</option>
            </select>
        </div>
        <div class="custom-select">
            <select name="size-tilda-select">
                <option value="">Izv??lieties izm??ru</option>
                <option value="4">4 m??</option>
                <option value="5">5 m??</option>
                <option value="7">7 m??</option>
                <option value="10">10 m??</option>
                <option value="15">15 m??</option>
                <option value="30">30 m??</option>
            </select>
        </div>
        <input type="text" name="phone-tilda-select" placeholder="+371 22222222">
        <input type="submit" class="custom-submit-button" value="P??rbaud??t pieejam??bu" />
    </form>
    <p>Noklik????inot uz pogas, j??s piekr??tat <a href="http://noliktava1.lv/privacy">datu apstr??des politikai</a></p>
</div>