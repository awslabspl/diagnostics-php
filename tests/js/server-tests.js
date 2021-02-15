import {withGlobal} from "../../docs/resources/js/fake-timers";

test("expect to have UserAgent", ()=>{
    expect(withGlobal.userAgent).toBeInstanceOf(String);
});