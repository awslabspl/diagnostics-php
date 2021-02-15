const ua = navigator.userAgent;
test("expect to have UserAgent", ()=>{
    expect(ua).toBeInstanceOf(Object);
});