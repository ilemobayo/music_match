$(function () {
    // player stop and play
    $('.play').on('click', function() {
        $this = $(this);
        i = $this.children();
        $('audio').each(function () {
            //console.log($(this).get(0));
            $(this).get(0).pause();
            $(this).get(0).currentTime = 0;
        });
        if(i.hasClass('fa-play-circle')){
            i.removeClass('fa-play-circle').addClass('fa-pause-circle');
            $this.next().get(0).play()
        }else{
            i.removeClass('fa-pause-circle').addClass('fa-play-circle');
            $this.next().get(0).pause()
        }
        $('audio').on('pause', function () {
            $(this).prev().children().removeClass('fa-pause-circle').addClass('fa-play-circle');
        })
        $('audio').on('ended', function () {
            $(this).prev().children().removeClass('fa-pause-circle').addClass('fa-play-circle');
        })
    })
    // ajout d'un titre dans la bibliotheque
    $('.addToLibrary').on('click', function () {
        var $this = $(this);
        var id_track = $this.data('id');
        $.post( ajaxAddTrack, { id: id_track } ,function( data ) {
            $('.panel-ajax').html( data.message );
            $('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                $(this).removeClass('move-panel-ajax');
                next();
            }).delay(500).queue(function(next){
                $(this).removeClass(data.status);
                next();
            });
        });
    })
    // retirer un titre de la biliotheque
    $('.removeToLibrary').on('click', function () {
        var $this = $(this);
        var id_track = $this.data('id');
        $.post( ajaxRemoveTrack, { id: id_track } ,function( data ) {
            $('.panel-ajax').html( data.message );
            $this.closest('li').slideUp('slow');
            $this.closest('li').next().hide();
            $('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                $(this).removeClass('move-panel-ajax');
                next();
            }).delay(500).queue(function(next){
                $(this).removeClass(data.status);
                next();
            });
        });
    })

    // ajout d'un amie dans la liste
    $('.addToFriends').on('click', function () {
        var $this = $(this);
        var id_friend = $this.data('id');
        $.post( ajaxAddFriend, { id: id_friend } ,function( data ) {
            $('.panel-ajax').html( data.message );
            $('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                $(this).removeClass('move-panel-ajax');
                next();
            }).delay(500).queue(function(next){
                $(this).removeClass(data.status);
                next();
            });
        });
    })

    // retirer un amie de la liste
    $('.removeToFriends').on('click', function () {
        var $this = $(this);
        var id_friend = $this.data('id');
        $.post( ajaxRemoveFriend, { id: id_friend } ,function( data ) {
            $('.panel-ajax').html( data.message );
            $this.closest('.col-sm-3').fadeOut('slow');
            $('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                $(this).removeClass('move-panel-ajax');
                next();
            }).delay(500).queue(function(next){
                $(this).removeClass(data.status);
                next();
            });
        });
    })

    // retirer un amie de la liste
    $('.removeToFriends2').on('click', function () {
        var $this = $(this);
        var id_friend = $this.data('id');
        $.post( ajaxRemoveFriend, { id_friend: id_friend } ,function( data ) {
            $('.panel-ajax').html( data.message );
            $this.closest('.col-sm-3').fadeOut('slow');
            $('.panel-ajax').addClass('move-panel-ajax ' + data.status).delay(2000).queue(function (next) {
                $(this).removeClass('move-panel-ajax');
                next();
            }).delay(500).queue(function(next){
                $(this).removeClass(data.status);
                next();
            });
        });
    })
});