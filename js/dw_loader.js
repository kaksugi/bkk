/*
    This code is from Dynamic Web Coding at dyn-web.com
    Copyright 2008-11 by Sharon Paine 
    See Terms of Use at www.dyn-web.com/business/terms.php
    regarding conditions under which you may use this code.
    This notice must be retained in the code as is!
*/

/*  
    dw_loader.js version date: Dec 2011
    info and download at www.dyn-web.com/tutorials/iframes/hidden.php
*/


var dw_Loader = {
    loadMsg: 'Retrieving data ...',
    displayID: 'display',
    iframeID: 'buffer',
    bReplace: false, // to use location.replace if you do not want back button to load previous iframe url 
    bScrollToTop: false, // page scroll to top when new content is loaded?
    
    load: function (url, iframeID, displayID, loadMsg) {
        var _this = dw_Loader;
        // can pass arg's or use defaults
        iframeID = iframeID || _this.iframeID; 
        displayID = displayID || _this.displayID;
        loadMsg = loadMsg || _this.loadMsg;
        var ifrmWn = window.frames[iframeID];
        var el = document.getElementById(displayID);
        if ( ifrmWn ) {
            if ( !_this.bReplace ) {
                ifrmWn.location = url;
            } else {
                ifrmWn.location.replace(url);
            }
            if ( _this.bScrollToTop ) {
                window.scrollTo(0,0);
            }
            if ( el && loadMsg ) { // Option to display message while retrieving data 
                el.innerHTML = loadMsg;
                el.style.display = 'block'; 
            }
            return false;
        } 
        return true; // to follow link 
    },
    
    // called onload of iframe 
    // displays body content of iframed doc in div
    display: function (iframeID, displayID, fp) {
        var _this = dw_Loader;
        iframeID = iframeID || _this.iframeID; 
        displayID = displayID || _this.displayID;
        var el = document.getElementById(displayID);
        var ifrmWn = window.frames[iframeID];
        var html = ifrmWn.document.body.innerHTML;
        if ( ifrmWn && html && el ) {
            el.innerHTML = ifrmWn.document.body.innerHTML;
            el.style.display = 'block'; 
            if ( typeof fp == 'function' ) {
                fp();
            }
        }
    }
}

