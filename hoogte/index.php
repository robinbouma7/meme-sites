<!DOCTYPE html>
<title>
    hoogte berekenen
</title>
<style>
html {
    background: black;
    color: white;
    text-align: center;
}
select {
    text-align-last:center;
}
</style>
<html>
    <body>
        <h1>
            hoogte berekenen
        </h1>
        <form type='submit' method='post' action='rekenwerk.php'>
            <p>hoe hoog bent u: (cm)</p>
            <input type='text' name='lengte' required><br><br>

            <p>welke eenheid wilt u gebruiken:</p>
            <select id="eenheid" name="eenheid">
                <option value="cm">centimeter</option>
                <option value="m">meter</option>
                <option value="mm">milimeter</option>
            </select>

            <p>wat is uw geslacht:</p>
            <select id="geslacht" name="geslacht">
                <option value="man">man</option>
                <option value="vrouw">vrouw</option>
                <option value="anders">anders</option>
                <option value="aah">apache attack helecopter</option>
                <option value="venezuela">venezuela</option>
                <option value="boot">boot</option>
                <option value="zak aardappelen">zak aardappelen</option>
                <option value="ar-15">ar-15</option>
                <option value="epic">epic</option>
                <option value="tank">tank</option>
                <option value="jisoo">jisoo</option>
                <option value="bushalte">bushalte</option>
                <option value="blower">blower</option>
                <option value="boeie">boeie</option>
                <option value="rude boi">rude boi</option>
                <option value="tractor">tractor</option>
                <option value="nb">non-binary</option>
                <option value="genderfluid">genderfluid</option>
                <option value="gender queer">gender queer</option>
                <option value="demi-girl">demi-girl</option>
                <option value="demi-guy">demi-guy</option>
                <option value="grama queen">drama gueen</option>
                <option value="depressie">depressie</option>
                <option value="mood">mood</option>
                <option value="struisvogel">struisvogel</option>
                <option value="kangoeroe">kangoeroe</option>
                <option value="eend">eend</option>
                <option value="angry">angry</option>
                <option value="plant">plant</option>
                <option value="pand 17">pand 17</option>
                <option value="ja">ja, bij de slager</option>
                <option value="nee">nee, ik leef nog</option>
                <option value="ditmagniet">fortnite fan</option>
                <option value="missile">Rt-2PM2 Topol-m cold-launched three-stage solid-propellant silo-based intercontinental ballistic missile</option>
                <option value="atgm">anti tank guided missile</option>
            </select><br><br>
            <!--<option value=""></option>-->
            <input type='submit' value='bereken hoogte'>
        </form>

    </body>
</html>