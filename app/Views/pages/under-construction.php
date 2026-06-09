<style>
    .card {
        width: 100%;
        background: white;
        border-radius: 24px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08), 0 1px 2px rgba(0, 0, 0, 0.02);
        padding: 2.8rem 2rem;
        text-align: center;
        transition: all 0.2s ease;
        border: 1px solid #eef2f6;
    }

    @media (max-width: 550px) {
        .card {
            padding: 2rem 1.5rem;
        }
    }

    /* simple typography */
    h1 {
        font-size: 2.4rem;
        font-weight: 600;
        letter-spacing: -0.01em;
        color: #1a2c3e;
        margin-bottom: 0.5rem;
    }

    .badge {
        display: inline-block;
        background: #eef2ff;
        color: #2c5f8a;
        font-size: 0.8rem;
        font-weight: 500;
        padding: 0.25rem 1rem;
        border-radius: 30px;
        margin-bottom: 1.5rem;
        letter-spacing: 0.3px;
    }

    /* simple description text */
    .description {
        color: #4a5b6e;
        line-height: 1.5;
        margin: 1.5rem 0 1.8rem;
        font-size: 1rem;
        border-top: 1px solid #e9edf2;
        padding-top: 1.5rem;
    }

    .description p {
        margin: 0.6rem 0;
    }

    .description strong {
        color: #1e3a5f;
        font-weight: 600;
    }

    /* countdown styling - clean & minimal */
    .countdown-box {
        background: #f8fafc;
        border-radius: 20px;
        padding: 1.2rem 0.8rem;
        margin: 1.5rem 0 1rem;
        border: 1px solid #e2e8f0;
    }

    .countdown-label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
        color: #5e6f8d;
        margin-bottom: 1rem;
    }

    .timer {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }

    .time-unit {
        background: white;
        border-radius: 18px;
        padding: 0.7rem 0.2rem;
        min-width: 85px;
        text-align: center;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.02);
        border: 1px solid #e2edf2;
    }

    .time-number {
        font-size: 2.6rem;
        font-weight: 700;
        font-family: 'SF Mono', 'Fira Code', monospace;
        color: #1e2f41;
        line-height: 1.1;
        letter-spacing: -0.5px;
    }

    .time-text {
        font-size: 0.75rem;
        text-transform: uppercase;
        font-weight: 500;
        color: #6c7f98;
        margin-top: 6px;
    }

    @media (max-width: 480px) {
        .time-unit {
            min-width: 68px;
            padding: 0.5rem 0.1rem;
        }

        .time-number {
            font-size: 2rem;
        }
    }

    /* simple note */
    .note {
        font-size: 0.85rem;
        color: #6f7f95;
        background: #fafbfd;
        display: inline-block;
        padding: 0.4rem 1rem;
        border-radius: 40px;
        margin-top: 1rem;
    }

    /* footer / contact */
    .footer {
        margin-top: 2rem;
        padding-top: 1.2rem;
        font-size: 0.8rem;
        color: #8a99b0;
        border-top: 1px solid #eff3f8;
        display: flex;
        justify-content: center;
        gap: 1.8rem;
        flex-wrap: wrap;
    }

    .footer span {
        cursor: default;
    }

    /* simple hover effect for card */
    .card:hover {
        box-shadow: 0 24px 42px -16px rgba(0, 0, 0, 0.12);
        transition: 0.2s;
    }
</style>
<br>
<br>
<br>
<br>
<div class="card">
    <h1>Under Construction</h1>
    <div class="badge">site upgrade in progress</div>

    <!-- simple descriptive text (no emojis) -->
    <div class="description">
        <p>We are currently rebuilding our platform to bring you a faster, cleaner, and more intuitive experience.
        </p>
        <p><strong>New features, improved design, and better performance</strong> — all coming soon.</p>
        <p>Thank you for your patience. We look forward to welcoming you back.</p>
    </div>

    <!-- countdown section -->
    <div class="countdown-box">
        <div class="countdown-label">Launch Countdown</div>
        <div class="timer" id="countdown-timer">
            <div class="time-unit">
                <div class="time-number" id="days">00</div>
                <div class="time-text">Days</div>
            </div>
            <div class="time-unit">
                <div class="time-number" id="hours">00</div>
                <div class="time-text">Hours</div>
            </div>
            <div class="time-unit">
                <div class="time-number" id="minutes">00</div>
                <div class="time-text">Minutes</div>
            </div>
            <div class="time-unit">
                <div class="time-number" id="seconds">00</div>
                <div class="time-text">Seconds</div>
            </div>
        </div>
        <div class="note">estimated completion · august 2026</div>
    </div>

    <div class="footer">
        <span>contact@buildstudio.com</span>
        <span>updates via newsletter</span>
    </div>
</div>

<script>
    (function () {
        let targetDateConfig = new Date(2026, 6, 0, 10, 30, 0);  // August 15, 2026 10:30 AM

        // Make sure countdown date is in the future; if invalid (past) we set +30 days from today
        const nowTime = new Date().getTime();
        let finalTarget = targetDateConfig;
        if (targetDateConfig.getTime() <= nowTime) {
            // fallback: 30 days from current moment (keeps page always showing future countdown)
            const fallbackDate = new Date();
            fallbackDate.setDate(fallbackDate.getDate() + 30);
            fallbackDate.setHours(18, 0, 0, 0);  // 6:00 PM
            finalTarget = fallbackDate;
        }

        let targetTime = finalTarget.getTime();
        let countdownActive = true;

        // DOM elements
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');
        const noteElement = document.querySelector('.note');

        // Helper: format with leading zero
        function formatTimeUnit(value) {
            return value < 10 ? '0' + value : value;
        }

        // Update countdown display
        function updateCountdown() {
            if (!countdownActive) return;

            const currentTime = new Date().getTime();
            const distance = targetTime - currentTime;

            // If countdown finished
            if (distance <= 0) {
                // set all zeros
                if (daysEl) daysEl.innerText = '00';
                if (hoursEl) hoursEl.innerText = '00';
                if (minutesEl) minutesEl.innerText = '00';
                if (secondsEl) secondsEl.innerText = '00';

                // update text to indicate live status
                const countdownLabel = document.querySelector('.countdown-label');
                if (countdownLabel) {
                    countdownLabel.innerText = 'Now Live';
                }
                if (noteElement) {
                    noteElement.innerText = 'the new site is now available';
                }
                countdownActive = false;
                return;
            }

            // calculate units
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (daysEl) daysEl.innerText = formatTimeUnit(days);
            if (hoursEl) hoursEl.innerText = formatTimeUnit(hours);
            if (minutesEl) minutesEl.innerText = formatTimeUnit(minutes);
            if (secondsEl) secondsEl.innerText = formatTimeUnit(seconds);
        }

        // initial call
        updateCountdown();
        // set interval every second
        const intervalId = setInterval(() => {
            updateCountdown();
            if (!countdownActive) {
                clearInterval(intervalId);
            }
        }, 1000);

        // optional: re-sync when page visibility changes (improves accuracy)
        document.addEventListener('visibilitychange', function () {
            if (!document.hidden && countdownActive) {
                updateCountdown();
            }
        });

        // small console log (optional, no emojis)
        console.log('Countdown active until: ' + finalTarget.toLocaleString());
    })();
</script>