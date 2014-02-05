$(function(){
 
    var container = $("#shuffling");
 
    container.shuffleLetters();
    shuffle2();
 
    function shuffle1() {
        setTimeout(function() {
            container.shuffleLetters({
                "text": "Hackers make awesome stuff."
            });
 
            shuffle2();
        }, 4000);
    }
 
    function shuffle2() {
        setTimeout(function() {
            container.shuffleLetters({
                "text": "Hackers meet awesome people."
            });
 
            shuffle3();
        }, 4000);
    }
 
    function shuffle3() {
        setTimeout(function() {
            container.shuffleLetters({
                "text": "Hackers meet awesome companies."
            });
 
            shuffle1();
        }, 4000);
    }
 
        //container.shuffleLetters();
});