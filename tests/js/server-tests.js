import {withGlobal} from "../../Utils/js/fake-timers";

test("expect to have UserAgent", ()=>{
    expect(withGlobal.userAgent).not.toBeEmpty;
});

/**
 * @default true
 * @summary Test wether maxPacketLife exceeds 300 ( ms )
 */