import { LoslenosPage } from './app.po';

describe('loslenos App', function() {
  let page: LoslenosPage;

  beforeEach(() => {
    page = new LoslenosPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
