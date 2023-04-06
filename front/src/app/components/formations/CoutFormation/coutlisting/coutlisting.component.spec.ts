import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CoutlistingComponent } from './coutlisting.component';

describe('CoutlistingComponent', () => {
  let component: CoutlistingComponent;
  let fixture: ComponentFixture<CoutlistingComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CoutlistingComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CoutlistingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
