    var Ziggy = {
        namedRoutes: {"events.index":{"uri":"events","methods":["GET","HEAD"],"domain":null},"events.create":{"uri":"events\/create","methods":["GET","HEAD"],"domain":null},"events.store":{"uri":"events","methods":["POST"],"domain":null},"events.show":{"uri":"events\/{event}","methods":["GET","HEAD"],"domain":null},"events.edit":{"uri":"events\/{event}\/edit","methods":["GET","HEAD"],"domain":null},"events.update":{"uri":"events\/{event}","methods":["PUT","PATCH"],"domain":null},"events.destroy":{"uri":"events\/{event}","methods":["DELETE"],"domain":null}},
        baseUrl: 'http://localhost/',
        baseProtocol: 'http',
        baseDomain: 'localhost',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
