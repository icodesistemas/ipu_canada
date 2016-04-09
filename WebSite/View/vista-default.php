<section class="proximo-evento">
    <div class="div-center">
        <div class = "evento">
            <div class="date">
                <p class="fecha">30/03/2016</p>
                <p>Próximo evento</p>
            </div>

        </div>
        <div class="resumen-evento">
            <h2>Retiros Juveniles</h2>
            <p>Invitados especiales no te lo puedes perder</p>
        </div>
        <div id="clockdiv" class="cuenta-regresiva">
            <div>
                <span class="days">9</span>
                <div class="smalltext">Días</div>
            </div>
            <div>
                <span class="hours">08</span>
                <div class="smalltext">Horas</div>
            </div>
            <div>
                <span class="minutes">00</span>
                <div class="smalltext">Minutos</div>
            </div>
            <div>
                <span class="seconds">00</span>
                <div class="smalltext">Segundos</div>
            </div>
        </div>
        <!--<a href="/eventos" class="btn link-evento">
            TODOS LOS EVENTOS
        </a>-->
        <div class="clear"></div>
    </div>
</section>
<br><br><br><br>


<script>
    var fecha_evento ='10/04/2016';
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());

        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60 )) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(new Date(fecha_evento ));

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
    initializeClock('clockdiv', deadline);
</script>

<br><br><br><br>