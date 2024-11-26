import ExampleComponent from './ExampleComponent.vue'

describe('<ExampleComponent />', () => {
  it('renders', () => {
    // see: https://on.cypress.io/mounting-vue
    cy.mount(ExampleComponent)
  })
})