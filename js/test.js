var test = {
    addEventListener : function (el, event, func) {
	if (el == document && event == 'ready') {
		//hs.push(hs.onReady, func);
	}
	try {
		el.addEventListener(event, func, false);
	} catch (e) {
		try {
			el.detachEvent('on'+ event, func);
			el.attachEvent('on'+ event, func);
		} catch (e) {
			el['on'+ event] = func;
		}
	} 
    },
    init:function(){
        test.addEventListener(document, 'ready', function(){
            alert('foo');
        });
    }
}