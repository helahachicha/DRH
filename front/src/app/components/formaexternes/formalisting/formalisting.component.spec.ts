import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormalistingComponent } from './formalisting.component';

describe('FormalistingComponent', () => {
  let component: FormalistingComponent;
  let fixture: ComponentFixture<FormalistingComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormalistingComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FormalistingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
