"use strict";

let hasFlippesCard = false;
let lockBoard = false;
let firstCard, secondCard;
let clicks = 0;
let score = 0;

const cards = document.querySelectorAll('.memory-card');

function start1 () {
    document.getElementById("start1").disabled = true;
    document.getElementById("start2").disabled = true;
    document.getElementById("start3").disabled = true;
    function showCountdown(countSeconds) {  
        var countStatus = new Date(1000 * countSeconds).toISOString().substr(11, 8);
        document.getElementById('time').innerHTML = countStatus;
        }
        var count = 30;
        function countdown() {
            if (count === 0) {
                return;
            }
            count--;
            setTimeout(countdown, 1000);
            showCountdown(count);
            if (count === 0) {
                lockBoard = true;
                document.getElementById('time').innerHTML = "Game Over...";
            }
            if (score === 30) {
                document.getElementById('time').innerText = "Victory!";
                return;
            }
        };

    countdown();

    function flipCard() {
        if (lockBoard) return;
        if (this === firstCard) return;
        this.classList.add('flip');
        if (!hasFlippesCard) {
            hasFlippesCard = true;
            firstCard = this;
            clicks ++;
            document.getElementById("flips").innerHTML = clicks;
            return;
        }
        hasFlippesCard = false;
        secondCard = this;
        clicks ++;
        document.getElementById("flips").innerHTML = clicks;
        if (firstCard.dataset.framework === secondCard.dataset.framework) {
            score +=5;
            document.getElementById("score").innerHTML = score;
        }
        checkMatch();
    }
    
    function checkMatch() {
        let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
        isMatch ? disableCards() : unflipCards();    
    }
    
    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);
        resetBoard();
    }
    
    function unflipCards() {
        lockBoard = true;
        setTimeout(() => {
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');
            resetBoard();
        }, 1200);
    }
    
    function resetBoard() {
        [hasFlippesCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null]; 
    }
    
    (function random() {
        cards.forEach(card => {
            let randomPos = Math.floor(Math.random() * 12);
            card.style.order = randomPos;
        });
    })();
    
    cards.forEach(card => card.addEventListener('click', flipCard));
}

function start2 () {
    document.getElementById("start1").disabled = true;
    document.getElementById("start2").disabled = true;
    document.getElementById("start3").disabled = true;
    function showCountdown(countSeconds) {  
        var countStatus = new Date(1000 * countSeconds).toISOString().substr(11, 8);
        document.getElementById('time').innerHTML = countStatus;
        }
        var count = 50;
        function countdown() {
            if (count === 0) {
                return;
            }
            count--;
            setTimeout(countdown, 1000);
            showCountdown(count);
            if (count === 0) {
                lockBoard = true;
                document.getElementById('time').innerHTML = "Game Over...";
            }
            if (score === 30) {
                document.getElementById('time').innerText = "Victory!";
                return;
            }
        };

    countdown();

    function flipCard() {
        if (lockBoard) return;
        if (this === firstCard) return;
        this.classList.add('flip');
        if (!hasFlippesCard) {
            hasFlippesCard = true;
            firstCard = this;
            clicks ++;
            document.getElementById("flips").innerHTML = clicks;
            return;
        }
        hasFlippesCard = false;
        secondCard = this;
        clicks ++;
        document.getElementById("flips").innerHTML = clicks;
        if (firstCard.dataset.framework === secondCard.dataset.framework) {
            score +=5;
            document.getElementById("score").innerHTML = score;
        }
        checkMatch();
    }
    
    function checkMatch() {
        let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
        isMatch ? disableCards() : unflipCards();    
    }
    
    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);
        resetBoard();
    }
    
    function unflipCards() {
        lockBoard = true;
        setTimeout(() => {
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');
            resetBoard();
        }, 1200);
    }
    
    function resetBoard() {
        [hasFlippesCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null]; 
    }
    
    (function random() {
        cards.forEach(card => {
            let randomPos = Math.floor(Math.random() * 12);
            card.style.order = randomPos;
        });
    })();
    
    cards.forEach(card => card.addEventListener('click', flipCard));
}

function start3 () {
    document.getElementById("start1").disabled = true;
    document.getElementById("start2").disabled = true;
    document.getElementById("start3").disabled = true;
    function showCountdown(countSeconds) {  
        var countStatus = new Date(1000 * countSeconds).toISOString().substr(11, 8);
        document.getElementById('time').innerHTML = countStatus;
        }
        var count = 80;
        function countdown() {
            if (count === 0) {
                return;
            }
            count--;
            setTimeout(countdown, 1000);
            showCountdown(count);
            if (count === 0) {
                lockBoard = true;
                document.getElementById('time').innerHTML = "Game Over...";
            }
            if (score === 30) {
                document.getElementById('time').innerText = "Victory!";
                return;
            }
        };

    countdown();

    function flipCard() {
        if (lockBoard) return;
        if (this === firstCard) return;
        this.classList.add('flip');
        if (!hasFlippesCard) {
            hasFlippesCard = true;
            firstCard = this;
            clicks ++;
            document.getElementById("flips").innerHTML = clicks;
            return;
        }
        hasFlippesCard = false;
        secondCard = this;
        clicks ++;
        document.getElementById("flips").innerHTML = clicks;
        if (firstCard.dataset.framework === secondCard.dataset.framework) {
            score +=5;
            document.getElementById("score").innerHTML = score;
        }
        checkMatch();
    }
    
    function checkMatch() {
        let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
        isMatch ? disableCards() : unflipCards();    
    }
    
    function disableCards() {
        firstCard.removeEventListener('click', flipCard);
        secondCard.removeEventListener('click', flipCard);
        resetBoard();
    }
    
    function unflipCards() {
        lockBoard = true;
        setTimeout(() => {
            firstCard.classList.remove('flip');
            secondCard.classList.remove('flip');
            resetBoard();
        }, 1200);
    }
    
    function resetBoard() {
        [hasFlippesCard, lockBoard] = [false, false];
        [firstCard, secondCard] = [null, null]; 
    }
    
    (function random() {
        cards.forEach(card => {
            let randomPos = Math.floor(Math.random() * 12);
            card.style.order = randomPos;
        });
    })();
    
    cards.forEach(card => card.addEventListener('click', flipCard));
}