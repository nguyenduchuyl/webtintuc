<style>
    .header{
        height: 80px;
        background: #f1b0b7;
    }
    .right-header {
        margin-top: 30px;
    }
    .right-header a{
        color: white;
        cursor: pointer;
        font-size: 15px;
        text-decoration: none;
    }

    .right-header .avatar{
        margin-top: -5px;
        object-fit: cover;
        width: 30px;
        height: 30px;
        position: absolute;
        border-radius: 50%;
    }

    .right-header .label-user-full-name{
        margin-left: 35px;
    }
    .menu{
        padding: 30px;
    }

    .menu a{
        color: white;
        cursor: pointer;
        font-size: 15px;
        text-decoration: none;
    }
    #loading-overlay { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: #000; opacity: 0.7; z-index: 100; }
    #loading-overlay .spinner-border{
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
    }
</style>