const puppeteer = require('puppeteer');
const expect = require('chai').expect;

describe('Website Testing with Puppeteer', function () {
    let browser;
    let page;

    before(async function () {
        browser = await puppeteer.launch(); // Meluncurkan browser headless
        page = await browser.newPage();
    });

    after(async function () {
        await browser.close(); // Menutup browser setelah tes selesai
    });

    it('should display the correct title', async function () {
        await page.goto('http://127.0.0.1:8000/admin'); // Ganti dengan URL website kamu
        const title = await page.title();
        expect(title).to.equal('My Website'); // Ganti dengan judul yang sesuai
    });

    it('should click a button and display correct content', async function () {
        await page.goto('http://127.0.0.1:8000/admin');
        await page.click('#myButton'); // Ganti dengan selector tombol yang sesuai
        const content = await page.$eval('#myContent', el => el.textContent);
        expect(content).to.include('Expected Text');
    });
});
