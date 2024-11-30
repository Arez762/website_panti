import { adminPage } from '../pages/Admin.Page';

describe('Add Page Photo-Galleries Menu Management', () => {
    const email = 'admin@gmail.com';
    const password = '123';

    beforeEach(() => {
        // Login terlebih dahulu sebelum setiap tes
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should login and navigate to Galleries page', () => {
        // Klik menu Galleries dan verifikasi halaman Galleries
        adminPage.clickGalleriesMenu()
            .verifyGalleriesPage();
    });
});

describe('add Page Photo-Galleries Create New Gallery', () => {
    const email = 'admin@gmail.com';
    const password = '123';
    const title = 'My New Gallery';
    const filePath = 'membaca.jpg';  // Jalur relatif file dalam folder fixtures

    beforeEach(() => {
        // Login terlebih dahulu sebelum setiap tes
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should open "New Gallery" form and fill it', () => {
        // Klik menu Galleries dan verifikasi halaman Galleries
        adminPage.clickGalleriesMenu()
            .verifyGalleriesPage();

        // Klik tombol "New Gallery" untuk membuka form
        adminPage.clicknewGalleriesButton();

        // Isi form dengan judul dan file gambar
        adminPage.fillCreateGalleryForm(title, filePath);

        // Menunggu beberapa detik sebelum mengirimkan form
        cy.wait(8000); // Menunggu 8 detik (5000 ms)

        // Kirim form untuk membuat gallery baru
        adminPage.submitCreateGalleryForm();

        // Verifikasi setelah pengisian dan pengiriman form
        cy.url().should('include', '/admin/photo-galleries');  // Memastikan URL mengarah ke halaman Galleries

        // Menunggu beberapa detik setelah submit
        
    });
});

describe('Photo-Galleries Edit Gallery', () => {
    const email = 'admin@gmail.com';
    const password = '123';
    const title = 'My New Gallery';
    const updatedTitle = 'Updated Gallery Title';  // Judul baru untuk gallery
    const filePath = 'membaca.jpg';  // Jalur relatif file dalam folder fixtures

    beforeEach(() => {
        // Login terlebih dahulu sebelum setiap tes
        adminPage.visit().login(email, password);
        adminPage.verifyLoginSuccess();
    });

    it('should create a new gallery and edit its title', () => {
        // Klik menu Galleries dan verifikasi halaman Galleries
        adminPage.clickGalleriesMenu()
            .verifyGalleriesPage();

        // Klik tombol "New Gallery" untuk membuka form
        adminPage.clicknewGalleriesButton();

        // Isi form dengan judul dan file gambar
        adminPage.fillCreateGalleryForm(title, filePath);

        // Menunggu beberapa detik sebelum mengirimkan form
        cy.wait(5000); // Menunggu 5 detik

        // Kirim form untuk membuat gallery baru
        adminPage.submitCreateGalleryForm();

        // Verifikasi setelah pengisian dan pengiriman form
        cy.url().should('include', '/admin/photo-galleries');  // Memastikan URL mengarah ke halaman Galleries

        // Verifikasi bahwa kita berada di halaman edit (biasanya URL-nya mengandung '/edit')
        cy.url().should('include', '/edit');  // Verifikasi bahwa kita diarahkan ke halaman edit

        // Mengedit title gallery setelah diarahkan ke halaman edit
        adminPage.editGalleryTitle(updatedTitle);

        // Verifikasi bahwa title telah diperbarui
        cy.get(adminPage.titleInput).should('have.value', updatedTitle);  // Memastikan title yang baru telah terisi

        // Verifikasi bahwa perubahan title berhasil disimpan dan gallery telah diperbarui
        cy.url().should('include', '/admin/photo-galleries');  // Memastikan kita kembali ke halaman Galleries

        cy.wait(30000); // Menunggu 30 detik (30000 ms)
    });
});
