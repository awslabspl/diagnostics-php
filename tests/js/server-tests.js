var ua = navigator.userAgent;
test("expect to have UserAgent", ()=>{
    expect(ua).not.toBeEmpty();
});