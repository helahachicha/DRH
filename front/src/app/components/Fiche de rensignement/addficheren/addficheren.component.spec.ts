import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddficherenComponent } from './addficheren.component';

describe('AddficherenComponent', () => {
  let component: AddficherenComponent;
  let fixture: ComponentFixture<AddficherenComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddficherenComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AddficherenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
