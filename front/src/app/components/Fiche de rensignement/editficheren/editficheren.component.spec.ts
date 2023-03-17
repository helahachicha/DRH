import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditficherenComponent } from './editficheren.component';

describe('EditficherenComponent', () => {
  let component: EditficherenComponent;
  let fixture: ComponentFixture<EditficherenComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditficherenComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(EditficherenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
