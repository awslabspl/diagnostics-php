const ft = require('../../docs/resources/js/fake-timers');
const mock = jest.fn();
describe("Testing", () => {
    ft.createClock = jest.fn().mockReturnValue(12012020);
    mock();
});
//
//
expect.extend({
    toBeType(received, argument) {
        const initialType = typeof received;
        const type = initialType === "object" ? Array.isArray(received) ? "array" : initialType : initialType;
        return type === argument ? {
            message: () => `expected ${received} to be type ${argument}`,
            pass: true
        } : {
            message: () => `expected ${received} to be type ${argument}`,
            pass: false
        };
    }
});

describe("testing extended expect", () => {
    it("tests normal types correctly", () => {
        expect("").toBeType("string");
        expect({}).toBeType("object");
        expect(1).toBeType("number");
    });
    it("tests array types correctly", () => {
        expect([]).toBeType("array");
    });
    it("works with promises", () => {
        expect(Promise.resolve([])).resolves.toBeType("array");
    });
});